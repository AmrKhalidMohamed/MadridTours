FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    nodejs \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions (pdo_sqlite already included in base image)
RUN docker-php-ext-install mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Install Node dependencies and build assets
RUN npm install && npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Create SQLite database
RUN touch /var/www/html/database/database.sqlite \
    && chown www-data:www-data /var/www/html/database/database.sqlite

# Apache configuration for Laravel
RUN echo '<VirtualHost *:10000>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
    AllowOverride All\n\
    Require all granted\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
    </VirtualHost>' > /etc/apache2/sites-available/laravel.conf

RUN a2dissite 000-default.conf \
    && a2ensite laravel.conf

# Render uses port 10000
RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf

# Startup script
RUN echo '#!/bin/bash\n\
    set -e\n\
    if [ ! -L /var/www/html/public/storage ] && [ ! -e /var/www/html/public/storage ]; then php artisan storage:link; fi\n\
    php artisan config:cache\n\
    php artisan migrate --force --seed\n\
    apache2-foreground' > /start.sh \
    && chmod +x /start.sh

EXPOSE 10000

CMD ["/start.sh"]
