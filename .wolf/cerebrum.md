# Cerebrum

> OpenWolf's learning memory. Updated automatically as the AI learns from interactions.
> Do not edit manually unless correcting an error.
> Last updated: 2026-08-04

## User Preferences

<!-- How the user likes things done. Code style, tools, patterns, communication. -->

## Key Learnings

- **Project:** MadridTours
- **Description:** <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red
- **Asset pipeline:** Bootstrap 5 CSS and JS are imported by `resources/js/app.js`; Tailwind directives remain in `resources/css/app.css`. Both entries are loaded by `@vite`.
- **Vite marker:** If `public/hot` remains after Vite stops, Laravel continues requesting assets from port 5173 instead of `public/build/manifest.json`, leaving `@vite` pages unstyled.
- **Render deploys:** Normalize environment-driven database connection names before using them in config; a case-mismatched `DB_CONNECTION` value can surface as `Database connection [SQLite] not configured` during startup.
- **Render runtime:** Also lowercase `DB_CONNECTION` in the container startup script before `config:cache` / `migrate`, because Render may preserve an uppercase value at runtime even when render.yaml declares lowercase.

## Do-Not-Repeat

<!-- Mistakes made and corrected. Each entry prevents the same mistake recurring. -->
<!-- Format: [YYYY-MM-DD] Description of what went wrong and what to do instead. -->
- [2026-08-04] Do not treat `ApplicationBuilder::trustProxies()` as an ordering issue in Laravel 11. This builder has no such method; configure trusted proxies through the `withMiddleware()` callback or omit the call. Verify framework APIs before proposing a chain-order fix.
- [2026-08-04] When Vite-managed CSS appears missing, inspect `public/hot` and the rendered asset URLs before changing CSS imports. A stale marker can point Laravel at an inactive Vite server.
- [2026-08-04] Do not assume Render's database env vars will preserve the exact casing expected by Laravel config keys. Lowercase `DB_CONNECTION` before using it as a connection name.
- [2026-08-04] When a runtime env value still leaks through, normalize it in the startup script before calling `php artisan config:cache` and `php artisan migrate`.

## Decision Log

<!-- Significant technical decisions with rationale. Why X was chosen over Y. -->
