# anatomy.md

> Auto-maintained by OpenWolf. Last scanned: 2026-08-03T17:57:08.165Z
> Files: 516 tracked | Anatomy hits: 0 | Misses: 0

## ./

- `.cmd` (~22 tok)
- `.editorconfig` — Editor configuration (~69 tok)
- `.gitattributes` — Git attributes (~50 tok)
- `.gitignore` — Git ignore rules (~61 tok)
- `artisan` — Laravel CLI entry point (~94 tok)
- `CLAUDE.md` — OpenWolf (~57 tok)
- `composer.json` — PHP package manifest (~582 tok)
- `GEMINI.md` — OpenWolf (~68 tok)
- `MadridTours.code-workspace` (~23 tok)
- `package-lock.json` — npm lock file (~28358 tok)
- `package.json` — Node.js package manifest (~135 tok)
- `patch_routes.py` (~24 tok)
- `phpunit.xml` (~341 tok)
- `postcss.config.js` — PostCSS configuration (~27 tok)
- `Procfile` (~10 tok)
- `README.md` — Project documentation (~1028 tok)
- `routes_web.patch` (~16 tok)
- `start.bat` (~30 tok)
- `tailwind.config.js` — Tailwind CSS configuration (~155 tok)
- `vite.config.js` — Vite build configuration (~89 tok)

## .claude/

- `settings.json` (~514 tok)

## .claude/commands/

- `reframe.md` — Mode: migrate [framework] (~551 tok)
- `security-audit.md` — Layer 1 — Dependencies (~510 tok)

## .claude/rules/

- `openwolf.md` (~328 tok)

## app/Http/Controllers/

- `BookingsController.php` — Display a listing of the resource. (~497 tok)
- `BookingViewController.php` — Display a listing of the resource. (~528 tok)
- `Controller.php` — Controller: Controller (~21 tok)
- `CustomersController.php` — Display a listing of the resource. (~366 tok)
- `CustomerViewController.php` — Display a listing of the resource. (~488 tok)
- `ImageController.php` — Display a listing of the resource. (~307 tok)
- `ImageViewController.php` — index, store, destroy (~378 tok)
- `ProfileController.php` — Display the user's profile form. (~378 tok)
- `ToursController.php` — Display a listing of the resource. (~495 tok)
- `TourViewController.php` — Display a listing of the resource. (~437 tok)

## app/Http/Controllers/Auth/

- `AuthenticatedSessionController.php` — Display the login view. (~277 tok)
- `ConfirmablePasswordController.php` — Show the confirm password view. (~274 tok)
- `EmailVerificationNotificationController.php` — Send a new email verification notification. (~168 tok)
- `EmailVerificationPromptController.php` — Display the email verification prompt. (~151 tok)
- `NewPasswordController.php` — Display the password reset view. (~584 tok)
- `PasswordController.php` — Update the user's password. (~212 tok)
- `PasswordResetLinkController.php` — Display the password reset link request view. (~351 tok)
- `RegisteredUserController.php` — Display the registration view. (~356 tok)
- `VerifyEmailController.php` — Mark the authenticated user's email address as verified. (~214 tok)

## app/Http/Requests/

- `ProfileUpdateRequest.php` — Get the validation rules that apply to the request. (~164 tok)
- `StoreBookingRequest.php` — Determine if the user is authorized to make this request. (~260 tok)
- `StoreCustomerRequest.php` — Determine if the user is authorized to make this request. (~216 tok)
- `StoreImageRequest.php` — Determine if the user is authorized to make this request. (~148 tok)

## app/Http/Requests/Auth/

- `LoginRequest.php` — Determine if the user is authorized to make this request. (~591 tok)

## app/Http/Resources/

- `BookingResource.php` — Transform the resource into an array. (~153 tok)
- `CustomerResource.php` — Transform the resource into an array. (~128 tok)
- `TourResource.php` — Transform the resource into an array. (~265 tok)

## app/Models/

- `Bookings.php` — Model — 4 fields (~80 tok)
- `Customers.php` — Model — table: customers, 2 fields (~78 tok)
- `Images.php` — Model — 2 fields, 1 rels (~94 tok)
- `Tours.php` — Model — 9 fields, 1 rels (~129 tok)
- `User.php` — The attributes that are mass assignable. (~257 tok)

## app/Providers/

- `AppServiceProvider.php` — Register any application services. (~119 tok)

## app/Services/

- `BookingQuery.php` — BookingQuery: transform (~274 tok)

## app/View/Components/

- `AppLayout.php` — Get the view / contents that represents the component. (~79 tok)
- `GuestLayout.php` — Get the view / contents that represents the component. (~80 tok)

## bootstrap/

- `app.php` (~149 tok)
- `providers.php` (~18 tok)

## bootstrap/cache/

- `.gitignore` — Git ignore rules (~4 tok)
- `packages.php` (~324 tok)
- `services.php` (~5627 tok)

## config/

- `app.php` (~1143 tok)
- `auth.php` (~1075 tok)
- `cache.php` (~914 tok)
- `cors.php` (~226 tok)
- `database.php` — Normalizes `DB_CONNECTION` to lowercase for case-insensitive deploy envs (~1625 tok)
- `filesystems.php` (~632 tok)
- `logging.php` (~1150 tok)
- `mail.php` — Declares of (~906 tok)
- `queue.php` (~1020 tok)
- `sanctum.php` (~799 tok)
- `services.php` — Declares of (~260 tok)
- `session.php` (~2094 tok)

## database/

- `.gitignore` — Git ignore rules (~3 tok)

## database/factories/

- `UserFactory.php` — Model factory: UserFactory (~287 tok)

## database/migrations/

- `0001_01_01_000000_create_users_table.php` — Run the migrations. (~393 tok)
- `0001_01_01_000001_create_cache_table.php` — Run the migrations. (~227 tok)
- `0001_01_01_000002_create_jobs_table.php` — Run the migrations. (~484 tok)
- `2024_03_17_032809_create_customers_table.php` — Run the migrations. (~164 tok)
- `2024_03_17_032822_create_tours_table.php` — Run the migrations. (~234 tok)
- `2024_03_17_032854_create_bookings_table.php` — Run the migrations. (~212 tok)
- `2024_03_29_031532_create_images_table.php` — Run the migrations. (~177 tok)
- `2024_04_27_134237_create_personal_access_tokens_table.php` — Run the migrations. (~229 tok)

## database/seeders/

- `AdminSeeder.php` — Run the database seeds. (~128 tok)
- `BookingsSeeder.php` — Run the database seeds. (~185 tok)
- `CustomersSeeder.php` — Run the database seeds. (~158 tok)
- `DatabaseSeeder.php` — Seed the application's database. (~122 tok)
- `ToursSeeder.php` — Run the database seeds. (~226 tok)

## public/

- `.htaccess` — Apache configuration (~161 tok)
- `index.php` (~125 tok)
- `robots.txt` (~6 tok)

## resources/css/

- `app.css` — Styles: 3 rules (~18 tok)

## resources/js/

- `app.js` (~59 tok)
- `bootstrap.js` (~37 tok)

## resources/views/

- `dashboard.blade.php` — Blade: 2 component(s) (~299 tok)
- `welcome.blade.php` — Blade: welcome (~9424 tok)

## resources/views/auth/

- `confirm-password.blade.php` — Blade: 1 form(s), 5 component(s) (~242 tok)
- `forgot-password.blade.php` — Blade: 1 form(s), 6 component(s) (~267 tok)
- `login.blade.php` — Blade: 1 form(s), 9 component(s) (~574 tok)
- `register.blade.php` — Blade: 1 form(s), 14 component(s) (~603 tok)
- `reset-password.blade.php` — Blade: 1 form(s), 11 component(s) (~439 tok)
- `verify-email.blade.php` — Blade: 2 form(s), 2 component(s) (~363 tok)

## resources/views/components/

- `application-logo.blade.php` — Blade: application-logo (~17 tok)
- `auth-session-status.blade.php` — Blade: auth-session-status (~48 tok)
- `danger-button.blade.php` — Blade: danger-button (~110 tok)
- `drop-down.blade.php` — Blade: drop-down (~893 tok)
- `dropdown-link.blade.php` — Blade: dropdown-link (~76 tok)
- `dropdown.blade.php` — Blade: dropdown (~370 tok)
- `input-error.blade.php` — Blade: input-error (~70 tok)
- `input-label.blade.php` — Blade: input-label (~44 tok)
- `modal.blade.php` — Blade: modal (~862 tok)
- `nav-link.blade.php` — Blade: nav-link (~217 tok)
- `primary-button.blade.php` — Blade: primary-button (~135 tok)
- `responsive-nav-link.blade.php` — Blade: responsive-nav-link (~268 tok)
- `secondary-button.blade.php` — Blade: secondary-button (~133 tok)
- `text-input.blade.php` — Blade: text-input (~77 tok)

## resources/views/layouts/

- `app.blade.php` — Blade: app (~334 tok)
- `guest.blade.php` — Blade: 1 component(s) (~312 tok)
- `navigation.blade.php` — Blade: 2 form(s), 10 component(s) (~1406 tok)
- `scripts.blade.php` — Blade: scripts (~118 tok)

## resources/views/pages/bookings/

- `edit.blade.php` — Blade: 1 form(s), 5 component(s) (~782 tok)
- `index.blade.php` — Blade: 3 form(s), 1 table(s), 7 component(s) (~1618 tok)

## resources/views/pages/customers/

- `edit.blade.php` — Blade: 1 form(s), 5 component(s) (~571 tok)
- `index.blade.php` — Blade: 2 form(s), 1 table(s), 4 component(s) (~896 tok)

## resources/views/pages/images/

- `index.blade.php` — Blade: 2 form(s), 1 table(s), 4 component(s) (~946 tok)

## resources/views/pages/tours/

- `edit.blade.php` — Blade: 1 form(s), 7 component(s) (~1315 tok)
- `index.blade.php` — Blade: 2 form(s), 1 table(s), 7 component(s) (~1956 tok)

## resources/views/profile/

- `edit.blade.php` — Blade: 2 component(s) (~271 tok)

## resources/views/profile/partials/

- `delete-user-form.blade.php` — Blade: 1 form(s), 7 component(s) (~591 tok)
- `update-password-form.blade.php` — Blade: 1 form(s), 10 component(s) (~580 tok)
- `update-profile-information-form.blade.php` — Blade: 2 form(s), 7 component(s) (~759 tok)

## routes/

- `api.php` (~193 tok)
- `auth.php` (~609 tok)
- `console.php` (~59 tok)
- `web.php` (~451 tok)

## storage/framework/

- `.gitignore` — Git ignore rules (~32 tok)

## storage/framework/cache/

- `.gitignore` — Git ignore rules (~6 tok)

## storage/framework/cache/data/

- `.gitignore` — Git ignore rules (~4 tok)

## storage/framework/sessions/

- `.gitignore` — Git ignore rules (~4 tok)

## storage/framework/testing/

- `.gitignore` — Git ignore rules (~4 tok)

## storage/framework/views/

- `.gitignore` — Git ignore rules (~4 tok)
- `66700e9a381478fb15b6a44242a3818a.php` (~9481 tok)

## storage/logs/

- `.gitignore` — Git ignore rules (~4 tok)

## tests/

- `TestCase.php` — Declares TestCase (~38 tok)

## tests/Feature/

- `ExampleTest.php` — A basic test example. (~96 tok)
- `ProfileTest.php` — ProfileTest: test_profile_page_is_displayed, test_profile_information_can_be_updated, test_email_verification_status_is_unchanged_when_the_email_ad... (~667 tok)

## tests/Feature/Auth/

- `AuthenticationTest.php` — AuthenticationTest: test_login_screen_can_be_rendered, test_users_can_authenticate_using_the_login_screen, test_users_can_not_authenticate_with_inv... (~339 tok)
- `EmailVerificationTest.php` — EmailVerificationTest: test_email_verification_screen_can_be_rendered, test_email_can_be_verified, test_email_is_not_verified_with_invalid_hash (~439 tok)
- `PasswordConfirmationTest.php` — PasswordConfirmationTest: test_confirm_password_screen_can_be_rendered, test_password_can_be_confirmed, test_password_is_not_confirmed_with_invalid... (~289 tok)
- `PasswordResetTest.php` — PasswordResetTest: test_reset_password_link_screen_can_be_rendered, test_reset_password_link_can_be_requested, test_reset_password_screen_can_be_re... (~532 tok)
- `PasswordUpdateTest.php` — PasswordUpdateTest: test_password_can_be_updated, test_correct_password_must_be_provided_to_update_password (~376 tok)
- `RegistrationTest.php` — RegistrationTest: test_registration_screen_can_be_rendered, test_new_users_can_register (~201 tok)

## tests/Unit/

- `ExampleTest.php` — A basic test example. (~65 tok)

## vendor/

- `autoload.php` — autoload.php @generated by Composer (~206 tok)

## vendor/bin/

- `carbon` — Proxy PHP file generated by Composer (~888 tok)
- `carbon.bat` (~36 tok)
- `patch-type-declarations` — Proxy PHP file generated by Composer (~916 tok)
- `patch-type-declarations.bat` (~40 tok)
- `php-parse` — Proxy PHP file generated by Composer (~893 tok)
- `php-parse.bat` (~37 tok)
- `phpunit` — Proxy PHP file generated by Composer (~984 tok)
- `phpunit.bat` (~36 tok)
- `pint` — Proxy PHP file generated by Composer (~888 tok)
- `pint.bat` (~35 tok)
- `psysh` — Proxy PHP file generated by Composer (~884 tok)
- `psysh.bat` (~36 tok)
- `sail` — Support bash to support `source` with fallback on $0 if this does not run with bash (~251 tok)
- `sail.bat` (~41 tok)
- `var-dump-server` — Proxy PHP file generated by Composer (~908 tok)
- `var-dump-server.bat` (~38 tok)
- `yaml-lint` — Proxy PHP file generated by Composer (~898 tok)
- `yaml-lint.bat` (~37 tok)

## vendor/brick/math/

- `CHANGELOG.md` — Change log (~4487 tok)
- `composer.json` — PHP package manifest (~203 tok)
- `LICENSE` — Project license (~291 tok)

## vendor/brick/math/src/

- `BigDecimal.php` — Immutable, arbitrary-precision signed decimal numbers. (~5958 tok)
- `BigInteger.php` — An arbitrary-size integer. (~8943 tok)
- `BigNumber.php` — Common interface for arbitrary-precision rational numbers. (~4161 tok)
- `BigRational.php` — An arbitrarily large rational number. (~3417 tok)
- `RoundingMode.php` — Specifies a rounding behavior for numerical operations capable of discarding precision. (~1030 tok)

## vendor/brick/math/src/Exception/

- `DivisionByZeroException.php` — Exception thrown when a division by zero occurs. (~197 tok)
- `IntegerOverflowException.php` — Exception thrown when an integer overflow occurs. (~141 tok)
- `MathException.php` — Base class for all math exceptions. (~42 tok)
- `NegativeNumberException.php` — Exception thrown when attempting to perform an unsupported operation, such as a square root, on a negative number. (~67 tok)
- `NumberFormatException.php` — Exception thrown when attempting to create a number from a string with an invalid format. (~202 tok)
- `RoundingNecessaryException.php` — Exception thrown when a number cannot be represented at the requested scale without rounding. (~123 tok)

## vendor/brick/math/src/Internal/

- `Calculator.php` — Performs basic operations on arbitrary size integers. (~5167 tok)

## vendor/brick/math/src/Internal/Calculator/

- `BcMathCalculator.php` — Calculator implementation built around the bcmath library. (~407 tok)
- `GmpCalculator.php` — Calculator implementation built around the GMP library. (~619 tok)
- `NativeCalculator.php` — Calculator implementation using only native PHP code. (~3667 tok)

## vendor/carbonphp/carbon-doctrine-types/

- `composer.json` — PHP package manifest (~226 tok)
- `LICENSE` — Project license (~284 tok)
- `README.md` — Project documentation (~130 tok)

## vendor/carbonphp/carbon-doctrine-types/src/Carbon/Doctrine/

- `CarbonDoctrineType.php` — Interface: CarbonDoctrineType (3 methods) (~106 tok)
- `CarbonImmutableType.php` — Declares CarbonImmutableType (~41 tok)
- `CarbonType.php` — Declares CarbonType (~36 tok)
- `CarbonTypeConverter.php` — Trait: CarbonTypeConverter (~860 tok)
- `DateTimeDefaultPrecision.php` — Change the default Doctrine datetime and datetime_immutable precision. (~152 tok)
- `DateTimeImmutableType.php` — DateTimeImmutableType: use CarbonTypeConverter; (~209 tok)
- `DateTimeType.php` — DateTimeType: use CarbonTypeConverter; (~148 tok)

## vendor/composer/

- `autoload_classmap.php` — autoload_classmap.php @generated by Composer (~212081 tok)
- `autoload_files.php` — autoload_files.php @generated by Composer (~903 tok)
- `autoload_namespaces.php` — autoload_namespaces.php @generated by Composer (~38 tok)
- `autoload_psr4.php` — autoload_psr4.php @generated by Composer (~1931 tok)
- `autoload_real.php` — autoload_real.php @generated by Composer (~446 tok)
- `autoload_static.php` — autoload_static.php @generated by Composer (~232137 tok)
- `ClassLoader.php` — ClassLoader implements a PSR-0, PSR-4 and classmap class loader. (~4368 tok)
- `installed.json` (~91425 tok)
- `installed.php` (~13709 tok)
- `InstalledVersions.php` — This class is copied in every Composer installed project and available to all (~4305 tok)
- `LICENSE` — Project license (~286 tok)
- `platform_check.php` — platform_check.php @generated by Composer (~247 tok)

## vendor/dflydev/dot-access-data/

- `CHANGELOG.md` — Change log (~586 tok)
- `composer.json` — PHP package manifest (~513 tok)
- `LICENSE` — Project license (~286 tok)
- `README.md` — Project documentation (~978 tok)

## vendor/dflydev/dot-access-data/src/

- `Data.php` — Data: {@inheritdoc}, {@inheritdoc}, {@inheritdoc}, {@inheritdoc} + 9 more (~1798 tok)
- `DataInterface.php` — Append a value to a key (assumes key refers to an array value) (~936 tok)
- `Util.php` — Test if array is an associative array (~514 tok)

## vendor/dflydev/dot-access-data/src/Exception/

- `DataException.php` — Base runtime exception type thrown by this library (~111 tok)
- `InvalidPathException.php` — Thrown when trying to access an invalid path in the data array (~115 tok)
- `MissingPathException.php` — Thrown when trying to access a path that does not exist (~207 tok)

## vendor/doctrine/inflector/

- `composer.json` — PHP package manifest (~444 tok)
- `LICENSE` — Project license (~284 tok)
- `README.md` — Project documentation (~132 tok)

## vendor/doctrine/inflector/docs/en/

- `index.rst` (~1631 tok)

## vendor/doctrine/inflector/lib/Doctrine/Inflector/

- `CachedWordInflector.php` — CachedWordInflector: inflect (~137 tok)
- `GenericLanguageInflectorFactory.php` — Model factory: GenericLanguageInflectorFactory (~447 tok)
- `Inflector.php` — Inflector: private $singularizer;, Converts a word into the format for a Doctrine cla, Camelizes a word. This uses the classify() method , Uppercas... (~3376 tok)
- `InflectorFactory.php` — Model factory: InflectorFactory (~380 tok)
- `Language.php` — Declares Language (~115 tok)
- `LanguageInflectorFactory.php` — Applies custom rules for singularisation (~215 tok)
- `NoopWordInflector.php` — NoopWordInflector: inflect (~54 tok)
- `RulesetInflector.php` — Inflects based on multiple rulesets. (~362 tok)
- `WordInflector.php` — Interface: WordInflector (1 methods) (~39 tok)

## vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/

- `Pattern.php` — Pattern: getPattern, getRegex, matches (~211 tok)
- `Patterns.php` — Patterns: matches (~186 tok)
- `Ruleset.php` — Ruleset: getRegular, getUninflected, getIrregular (~208 tok)
- `Substitution.php` — Substitution: getFrom, getTo (~121 tok)
- `Substitutions.php` — Substitutions: getFlippedSubstitutions, inflect (~366 tok)
- `Transformation.php` — Transformation: getPattern, getReplacement, inflect (~211 tok)
- `Transformations.php` — Transformations: inflect (~173 tok)
- `Word.php` — Word: getWord (~79 tok)

## vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/English/

- `Inflectible.php` — Inflectible: getSingular, getPlural, getIrregular (~3166 tok)
- `InflectorFactory.php` — Model factory: InflectorFactory (~123 tok)
- `Rules.php` — Rules: getSingularRuleset, getPluralRuleset (~234 tok)
- `Uninflected.php` — Uninflected: getSingular, getPlural (~1745 tok)

## vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/French/

- `Inflectible.php` — Inflectible: getSingular, getPlural, getIrregular (~500 tok)
- `InflectorFactory.php` — Model factory: InflectorFactory (~123 tok)
- `Rules.php` — Rules: getSingularRuleset, getPluralRuleset (~233 tok)
- `Uninflected.php` — Uninflected: getSingular, getPlural (~142 tok)

## vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/NorwegianBokmal/

- `Inflectible.php` — Inflectible: getSingular, getPlural, getIrregular (~252 tok)
- `InflectorFactory.php` — Model factory: InflectorFactory (~126 tok)
- `Rules.php` — Rules: getSingularRuleset, getPluralRuleset (~236 tok)
- `Uninflected.php` — Uninflected: getSingular, getPlural (~164 tok)

## vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/Portuguese/

- `Inflectible.php` — Inflectible: getSingular, getPlural, getIrregular (~1487 tok)
- `InflectorFactory.php` — Model factory: InflectorFactory (~124 tok)
- `Rules.php` — Rules: getSingularRuleset, getPluralRuleset (~234 tok)
- `Uninflected.php` — Uninflected: getSingular, getPlural (~183 tok)

## vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/Spanish/

- `Inflectible.php` — Inflectible: getSingular, getPlural, getIrregular (~490 tok)
- `InflectorFactory.php` — Model factory: InflectorFactory (~123 tok)
- `Rules.php` — Rules: getSingularRuleset, getPluralRuleset (~234 tok)
- `Uninflected.php` — Uninflected: getSingular, getPlural (~164 tok)

## vendor/doctrine/inflector/lib/Doctrine/Inflector/Rules/Turkish/

- `Inflectible.php` — Inflectible: getSingular, getPlural, getIrregular (~266 tok)
- `InflectorFactory.php` — Model factory: InflectorFactory (~123 tok)
- `Rules.php` — Rules: getSingularRuleset, getPluralRuleset (~234 tok)
- `Uninflected.php` — Uninflected: getSingular, getPlural (~164 tok)

## vendor/doctrine/lexer/

- `composer.json` — PHP package manifest (~405 tok)
- `LICENSE` — Project license (~284 tok)
- `README.md` — Project documentation (~92 tok)
- `UPGRADE.md` — Upgrade to 3.0.0 (~241 tok)

## vendor/doctrine/lexer/src/

- `AbstractLexer.php` — Base class for writing simple lexers, i.e. for creating small DSLs. (~1986 tok)
- `Token.php` — Token: isA (~273 tok)

## vendor/dragonmantank/cron-expression/

- `CHANGELOG.md` — Change log (~1636 tok)
- `composer.json` — PHP package manifest (~356 tok)
- `LICENSE` — Project license (~306 tok)
- `README.md` — Project documentation (~936 tok)

## vendor/dragonmantank/cron-expression/src/Cron/

- `AbstractField.php` — Abstract CRON expression field. (~2638 tok)
- `CronExpression.php` — CRON expression parser that can determine whether or not a CRON expression is (~5503 tok)
- `DayOfMonthField.php` — Day of month field. Allows: \* , / - ? L W. (~1303 tok)
- `DayOfWeekField.php` — Day of week field. Allows: \* / , - ? L #. (~1536 tok)
- `FieldFactory.php` — CRON field factory implementing a flyweight factory. (~375 tok)
- `FieldFactoryInterface.php` — Interface: FieldFactoryInterface (1 methods) (~33 tok)
- `FieldInterface.php` — CRON field interface. (~354 tok)
- `HoursField.php` — Hours field. Allows: \* , / -. (~1894 tok)
- `MinutesField.php` — Minutes field. Allows: \* , / -. (~721 tok)
- `MonthField.php` — Month field. Allows: \* , / -. (~357 tok)

## vendor/egulias/email-validator/

- `CHANGELOG.md` — Change log (~260 tok)
- `composer.json` — PHP package manifest (~268 tok)
- `CONTRIBUTING.md` — Contributing (~1628 tok)
- `LICENSE` — Project license (~286 tok)

## vendor/egulias/email-validator/src/

- `EmailLexer.php` — EmailLexer: class EmailLexer extends AbstractLexer, moveNext, Retrieve token type. Also processes the token valu, getAccumulatedValues + 3 more (~2329 tok)
- `EmailParser.php` — EmailParser: parse, getDomainPart, getLocalPart (~634 tok)
- `EmailValidator.php` — EmailValidator: private $lexer;, hasWarnings, getWarnings, getError (~330 tok)
- `MessageIDParser.php` — MessageIDParser: parse, getLeftPart, getRightPart (~627 tok)
- `Parser.php` — Parser: protected $warnings = []; (~477 tok)

## vendor/egulias/email-validator/src/Parser/

- `Comment.php` — Comment: parse (~842 tok)
- `DomainLiteral.php` — DomainLiteral: parse, checkIPV6Tag, convertIPv4ToIPv6 (~1912 tok)
- `DomainPart.php` — DomainPart: parse, domainPart (~2859 tok)
- `DoubleQuote.php` — DoubleQuote: parse (~854 tok)
- `FoldingWhiteSpace.php` — FoldingWhiteSpace: parse (~746 tok)
- `IDLeftPart.php` — IDLeftPart: parseComments (~103 tok)
- `IDRightPart.php` — IDRightPart: validateTokens (~260 tok)
- `LocalPart.php` — LocalPart: parse, localPart (~1443 tok)
- `PartParser.php` — PartParser: protected $warnings = []; (~411 tok)

## vendor/egulias/email-validator/src/Parser/CommentStrategy/

- `CommentStrategy.php` — Return "true" to continue, "false" to exit (~140 tok)
- `DomainComment.php` — DomainComment: exitCondition, endOfLoopValidations, getWarnings (~280 tok)
- `LocalComment.php` — LocalComment: exitCondition, endOfLoopValidations, getWarnings (~284 tok)

## vendor/egulias/email-validator/src/Result/

- `InvalidEmail.php` — InvalidEmail: isValid, isInvalid, description, code + 1 more (~225 tok)
- `MultipleErrors.php` — MultipleErrors: class MultipleErrors extends InvalidEmail, reason, description, code (~285 tok)
- `Result.php` — Is validation result valid? (~134 tok)
- `SpoofEmail.php` — Declares SpoofEmail (~82 tok)
- `ValidEmail.php` — ValidEmail: isValid, isInvalid, description, code (~102 tok)

## vendor/egulias/email-validator/src/Result/Reason/

- `AtextAfterCFWS.php` — AtextAfterCFWS: code, description (~70 tok)
- `CharNotAllowed.php` — CharNotAllowed: code, description (~69 tok)
- `CommaInDomain.php` — CommaInDomain: code, description (~74 tok)
- `CommentsInIDRight.php` — CommentsInIDRight: code, description (~78 tok)
- `ConsecutiveAt.php` — ConsecutiveAt: code, description (~70 tok)
- `ConsecutiveDot.php` — ConsecutiveDot: code, description (~70 tok)
- `CRLFAtTheEnd.php` — CRLFAtTheEnd: code, description (~88 tok)
- `CRLFX2.php` — CRLFX2: code, description (~69 tok)
- `CRNoLF.php` — CRNoLF: code, description (~67 tok)
- `DetailedReason.php` — Declares DetailedReason (~68 tok)
- `DomainAcceptsNoMail.php` — DomainAcceptsNoMail: code, description (~76 tok)
- `DomainHyphened.php` — DomainHyphened: code, description (~72 tok)
- `DomainTooLong.php` — DomainTooLong: code, description (~74 tok)
- `DotAtEnd.php` — DotAtEnd: code, description (~66 tok)
- `DotAtStart.php` — DotAtStart: code, description (~68 tok)
- `EmptyReason.php` — EmptyReason: code, description (~66 tok)
- `ExceptionFound.php` — ExceptionFound: code, description (~119 tok)
- `ExpectingATEXT.php` — ExpectingATEXT: code, description (~86 tok)
- `ExpectingCTEXT.php` — ExpectingCTEXT: code, description (~68 tok)
- `ExpectingDomainLiteralClose.php` — ExpectingDomainLiteralClose: code, description (~80 tok)
- `ExpectingDTEXT.php` — ExpectingDTEXT: code, description (~68 tok)
- `LabelTooLong.php` — LabelTooLong: code, description (~75 tok)
- `LocalOrReservedDomain.php` — LocalOrReservedDomain: code, description (~79 tok)
- `NoDNSRecord.php` — NoDNSRecord: code, description (~75 tok)
- `NoDomainPart.php` — NoDomainPart: code, description (~69 tok)
- `NoLocalPart.php` — NoLocalPart: code, description (~67 tok)
- `Reason.php` — Code for user land to act upon; (~76 tok)
- `RFCWarnings.php` — RFCWarnings: code, description (~72 tok)
- `SpoofEmail.php` — SpoofEmail: code, description (~80 tok)
- `UnableToGetDNSRecord.php` — Used on SERVFAIL, TIMEOUT or other runtime and network errors (~95 tok)
- `UnclosedComment.php` — UnclosedComment: code, description (~72 tok)
- `UnclosedQuotedString.php` — UnclosedQuotedString: code, description (~72 tok)
- `UnOpenedComment.php` — UnOpenedComment: code, description (~87 tok)
- `UnusualElements.php` — UnusualElements: code, description (~135 tok)

## vendor/egulias/email-validator/src/Validation/

- `DNSCheckValidation.php` — Reserved Top Level DNS Names (https://tools.ietf.org/html/rfc2606#section-2), (~1544 tok)
- `DNSGetRecordWrapper.php` — DNSGetRecordWrapper: getRecords (~243 tok)
- `DNSRecords.php` — DNSRecords: getRecords, withError (~123 tok)
- `EmailValidation.php` — Returns true if the given email is valid. (~210 tok)
- `MessageIDValidation.php` — MessageIDValidation: private $warnings = [];, getError (~347 tok)
- `MultipleValidationWithAnd.php` — If one of validations fails, the remaining validations will be skipped. (~753 tok)
- `NoRFCWarningsValidation.php` — NoRFCWarningsValidation: private $error;, {@inheritdoc} (~226 tok)
- `RFCValidation.php` — RFCValidation: private array $warnings = []; (~345 tok)

## vendor/egulias/email-validator/src/Validation/Exception/

- `EmptyValidationList.php` — Declares EmptyValidationList (~94 tok)

## vendor/egulias/email-validator/src/Validation/Extra/

- `SpoofCheckValidation.php` — SpoofCheckValidation: private $error;, getError, getWarnings (~303 tok)

## vendor/egulias/email-validator/src/Warning/

- `AddressLiteral.php` — Declares AddressLiteral (~69 tok)
- `CFWSNearAt.php` — Declares CFWSNearAt (~61 tok)
- `CFWSWithFWS.php` — Declares CFWSWithFWS (~66 tok)
- `Comment.php` — Declares Comment (~58 tok)
- `DeprecatedComment.php` — Declares DeprecatedComment (~58 tok)
- `DomainLiteral.php` — Declares DomainLiteral (~65 tok)
- `EmailTooLong.php` — Declares EmailTooLong (~79 tok)
- `IPV6BadChar.php` — Declares IPV6BadChar (~69 tok)
- `IPV6ColonEnd.php` — Declares IPV6ColonEnd (~72 tok)
- `IPV6ColonStart.php` — Declares IPV6ColonStart (~73 tok)
- `IPV6Deprecated.php` — Declares IPV6Deprecated (~67 tok)
- `IPV6DoubleColon.php` — Declares IPV6DoubleColon (~70 tok)
- `IPV6GroupCount.php` — Declares IPV6GroupCount (~69 tok)
- `IPV6MaxGroups.php` — Declares IPV6MaxGroups (~74 tok)
- `LocalTooLong.php` — Declares LocalTooLong (~85 tok)
- `NoDNSMXRecord.php` — Declares NoDNSMXRecord (~72 tok)
- `ObsoleteDTEXT.php` — Declares ObsoleteDTEXT (~70 tok)
- `QuotedPart.php` — Declares QuotedPart (~98 tok)
- `QuotedString.php` — Declares QuotedString (~93 tok)
- `TLD.php` — Declares TLD (~52 tok)
- `Warning.php` — Warning: public const CODE = 0;, code, RFCNumber, \_\_toString (~210 tok)

## vendor/fakerphp/faker/

- `CHANGELOG.md` — Change log (~2117 tok)
- `composer.json` — PHP package manifest (~471 tok)
- `LICENSE` — Project license (~316 tok)
- `README.md` — Project documentation (~945 tok)
- `rector-migrate.php` (~1001 tok)

## vendor/fakerphp/faker/src/

- `autoload.php` — Simple autoloader that follow the PHP Standards Recommendation #0 (PSR-0) (~236 tok)

## vendor/fakerphp/faker/src/Faker/

- `ChanceGenerator.php` — This generator returns a default value for all called properties (~381 tok)
- `DefaultGenerator.php` — This generator returns a default value for all called properties (~274 tok)
- `Documentor.php` — Documentor: getFormatters (~643 tok)
- `Factory.php` — Create a new generator (~545 tok)
- `Generator.php` — Generator: class Generator (~6145 tok)
- `UniqueGenerator.php` — Proxy for other generators that returns only unique values. (~623 tok)
- `ValidGenerator.php` — Proxy for other generators, to return only valid values. Works with (~568 tok)

## vendor/fakerphp/faker/src/Faker/Calculator/

- `Ean.php` — Utility class for validating EAN-8 and EAN-13 numbers (~302 tok)
- `Iban.php` — Generates IBAN Checksum (~431 tok)
- `Inn.php` — Inn: class Inn, Checks whether an INN has a valid checksum (~336 tok)
- `Isbn.php` — Utility class for validating ISBN-10 (~413 tok)
- `Luhn.php` — Utility class for generating and validating Luhn numbers. (~437 tok)
- `TCNo.php` — TCNo: class TCNo, Checks whether a TCNo has a valid checksum (~308 tok)

## vendor/fakerphp/faker/src/Faker/Container/

- `Container.php` — A simple implementation of a container. (~1000 tok)
- `ContainerBuilder.php` — is: final class ContainerBuilder, build, withDefaultExtensions (~500 tok)
- `ContainerException.php` — Declares is (~80 tok)
- `ContainerInterface.php` — Interface: ContainerInterface (0 methods) (~44 tok)
- `NotInContainerException.php` — Declares is (~81 tok)

## vendor/fakerphp/faker/src/Faker/Core/

- `Barcode.php` — is: ean13, ean8, isbn10, isbn13 (~338 tok)
- `Blood.php` — is: bloodType, bloodRh, bloodGroup (~219 tok)
- `Color.php` — is: final class Color implements Extension\ColorExtens, safeHexColor, rgbColorAsArray, rgbColor + 6 more (~1428 tok)
- `Coordinates.php` — is: final class Coordinates implements Extension\Exten, longitude, localCoordinates (~568 tok)
- `DateTime.php` — is: dateTime, dateTimeAD, dateTimeBetween, dateTimeInInterval + 17 more (~1679 tok)
- `File.php` — Declares is (~6323 tok)
- `Number.php` — is: numberBetween, randomDigit, randomDigitNot, randomDigitNotZero + 2 more (~522 tok)
- `Uuid.php` — is: uuid3 (~550 tok)
- `Version.php` — is: final class Version implements Extension\VersionEx (~563 tok)

## vendor/fakerphp/faker/src/Faker/Extension/

- `AddressExtension.php` — Interface: is (6 methods) (~204 tok)
- `BarcodeExtension.php` — Interface: is (4 methods) (~226 tok)
- `BloodExtension.php` — Interface: is (3 methods) (~141 tok)
- `ColorExtension.php` — Interface: is (10 methods) (~303 tok)
- `CompanyExtension.php` — Interface: is (3 methods) (~103 tok)
- `CountryExtension.php` — Interface: is (1 methods) (~69 tok)
- `DateTimeExtension.php` — FakerPHP extension for Date-related randomization. (~2469 tok)
- `Extension.php` — An extension is the only way to add new functionality to Faker. (~67 tok)
- `ExtensionNotFound.php` — Declares is (~56 tok)
- `FileExtension.php` — Interface: is (3 methods) (~146 tok)
- `GeneratorAwareExtension.php` — Interface: is (1 methods) (~131 tok)
- `GeneratorAwareExtensionTrait.php` — A helper trait to be used with GeneratorAwareExtension. (~128 tok)
- `Helper.php` — A class with some methods that may make building extensions easier. (~859 tok)
- `NumberExtension.php` — Interface: is (6 methods) (~371 tok)
- `PersonExtension.php` — Interface: is (8 methods) (~300 tok)
- `PhoneNumberExtension.php` — Interface: is (2 methods) (~98 tok)
- `UuidExtension.php` — Interface: is (1 methods) (~91 tok)
- `VersionExtension.php` — Interface: is (1 methods) (~168 tok)

## vendor/fakerphp/faker/src/Faker/Guesser/

- `Name.php` — Name: guessFormat (~1418 tok)

## vendor/fakerphp/faker/src/Faker/ORM/CakePHP/

- `ColumnTypeGuesser.php` — ColumnTypeGuesser: guessFormat (~593 tok)
- `EntityPopulator.php` — EntityPopulator: **get, **set, mergeColumnFormattersWith, mergeModifiersWith + 4 more (~1227 tok)
- `Populator.php` — Populator: getGenerator, getGuessers, removeGuesser, addGuesser + 2 more (~672 tok)

## vendor/fakerphp/faker/src/Faker/ORM/Doctrine/

- `backward-compatibility.php` (~109 tok)
- `ColumnTypeGuesser.php` — ColumnTypeGuesser: guessFormat (~716 tok)
- `EntityPopulator.php` — Service class for populating a table through a Doctrine Entity class. (~1967 tok)
- `Populator.php` — Service class for populating a database using the Doctrine ORM or ODM. (~954 tok)

## vendor/fakerphp/faker/src/Faker/ORM/Mandango/

- `ColumnTypeGuesser.php` — ColumnTypeGuesser: protected $generator; (~365 tok)
- `EntityPopulator.php` — Service class for populating a table through a Mandango ActiveRecord class. (~880 tok)
- `Populator.php` — Service class for populating a database using Mandango. (~510 tok)

## vendor/fakerphp/faker/src/Faker/ORM/Propel/

- `ColumnTypeGuesser.php` — ColumnTypeGuesser: guessFormat (~943 tok)
- `EntityPopulator.php` — Service class for populating a table through a Propel ActiveRecord class. (~1524 tok)
- `Populator.php` — Service class for populating a database using the Propel ORM. (~739 tok)

## vendor/fakerphp/faker/src/Faker/ORM/Propel2/

- `ColumnTypeGuesser.php` — ColumnTypeGuesser: guessFormat (~938 tok)
- `EntityPopulator.php` — Service class for populating a table through a Propel ActiveRecord class. (~1553 tok)
- `Populator.php` — Service class for populating a database using the Propel ORM. (~769 tok)

## vendor/fakerphp/faker/src/Faker/ORM/Spot/

- `ColumnTypeGuesser.php` — ColumnTypeGuesser constructor. (~608 tok)
- `EntityPopulator.php` — Service class for populating a table through a Spot Entity class. (~1355 tok)
- `Populator.php` — Service class for populating a database using the Spot ORM. (~690 tok)

## vendor/fakerphp/faker/src/Faker/Provider/

- `Address.php` — Address: citySuffix, streetSuffix, buildingNumber, city + 8 more (~953 tok)
- `Barcode.php` — Barcode: class Barcode extends Base, Get a random EAN8 barcode., Get a random ISBN-10 code, Get a random ISBN-13 code (~598 tok)
- `Base.php` — Base: protected $generator;, Returns a random number between 1 and 9, Generates a random digit, which cannot be $except, Returns a random integer w... (~6061 tok)
- `Biased.php` — Returns a biased integer between $min and $max (both inclusive). (~488 tok)
- `Color.php` — Color: hexColor, safeHexColor, rgbColorAsArray, rgbColor + 6 more (~1267 tok)
- `Company.php` — Company: company, companySuffix, jobTitle (~241 tok)
- `DateTime.php` — DateTime: protected static function getMaxTimestamp($max = ', Get a datetime object for a date between January 1, Get a datetime object for a date ... (~3303 tok)
- `File.php` — MIME types from the apache.org file. Some types are truncated. (~6856 tok)
- `HtmlLorem.php` — HtmlLorem: randomHtml (~2727 tok)
- `Image.php` — Depends on image generation from http://lorempixel.com/ (~1638 tok)
- `Internet.php` — Internet: protected static $localIpBlocks = [, final public function safeEmail(), companyEmail, freeEmailDomain + 11 more (~4454 tok)
- `Lorem.php` — Lorem: word, Generate an array of random words, Generate a random sentence, Generate an array of sentences + 3 more (~2103 tok)
- `Medical.php` — Medical: bloodType, bloodRh, bloodGroup (~173 tok)
- `Miscellaneous.php` — Miscellaneous: On date of 2017-03-26, md5, sha1, sha256 + 1 more (~3607 tok)
- `Payment.php` — Payment: protected static $cardParams = [, Returns the String of a credit card number., creditCardExpirationDate, creditCardExpirationDateString + ... (~2845 tok)
- `Person.php` — Person: name, firstName, firstNameMale, firstNameFemale + 4 more (~883 tok)
- `PhoneNumber.php` — PhoneNumber: protected static $e164Formats = [, e164PhoneNumber, International Mobile Equipment Identity (IMEI) (~1761 tok)
- `Text.php` — Generate a text string by the Markov chain algorithm. (~1816 tok)
- `UserAgent.php` — Possible processors on Linux (~2310 tok)
- `Uuid.php` — Generate name based md5 UUID (version 3). (~486 tok)

## vendor/fakerphp/faker/src/Faker/Provider/ar_EG/

- `Address.php` — Address: protected static $cityName = [, cityName, streetPrefix, secondaryAddress + 2 more (~2020 tok)
- `Color.php` — Declares Color (~354 tok)
- `Company.php` — Company: companyPrefix, catchPhrase, example 010101010, example 010101 (~545 tok)
- `Internet.php` — Internet: lastNameAscii, firstNameAscii, userName, domainName (~518 tok)
- `Payment.php` — International Bank Account Number (IBAN) (~87 tok)
- `Person.php` — Person: protected static $firstNameMale = [, nationalIdNumber (~2164 tok)
- `Text.php` — License: Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0) (~2974 tok)

## vendor/fakerphp/faker/src/Faker/Provider/ar_JO/

- `Address.php` — Address: protected static $cityName = [, cityName, streetPrefix, secondaryAddress + 2 more (~1932 tok)
- `Company.php` — Company: companyPrefix, catchPhrase, bs (~414 tok)
- `Internet.php` — Internet: lastNameAscii, firstNameAscii, userName, domainName (~430 tok)
- `Person.php` — Declares Person (~3498 tok)
- `Text.php` — License: Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0) (~26123 tok)

## vendor/fakerphp/faker/src/Faker/Provider/ar_SA/

- `Address.php` — Address: protected static $cityName = [, cityName, streetPrefix, secondaryAddress + 2 more (~2111 tok)
- `Color.php` — Declares Color (~1998 tok)
- `Company.php` — Company: companyPrefix, catchPhrase, bs, example 7001010101 (~480 tok)
- `Internet.php` — Internet: lastNameAscii, firstNameAscii, userName, domainName (~430 tok)
- `Payment.php` — International Bank Account Number (IBAN) (~182 tok)
- `Person.php` — Declares Person (~2892 tok)
- `Text.php` — License: Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0) (~26123 tok)

## vendor/fakerphp/faker/src/Faker/Provider/at_AT/

- `Payment.php` — Declares Payment (~63 tok)

## vendor/fakerphp/faker/src/Faker/Provider/bg_BG/

- `Internet.php` — Declares Internet (~83 tok)
- `Payment.php` — International Bank Account Number (IBAN) (~373 tok)
- `Person.php` — Declares Person (~5659 tok)
- `PhoneNumber.php` — Declares PhoneNumber (~113 tok)

## vendor/fakerphp/faker/src/Faker/Provider/bn_BD/

- `Address.php` — Declares Address (~1953 tok)
- `Company.php` — Company: companyType, companyName (~144 tok)
- `Person.php` — Declares Person (~297 tok)
- `PhoneNumber.php` — PhoneNumber: phoneNumber (~71 tok)
- `Utils.php` — Utils: getBanglaNumber (~75 tok)

## vendor/fakerphp/faker/src/Faker/Provider/cs_CZ/

- `Address.php` — Source: https://cs.wikipedia.org/wiki/Seznam_m%C4%9Bst_v_%C4%8Cesku_podle_po%C4%8Dtu_obyvatel (~2339 tok)
- `Company.php` — Company: protected static $formats = [, Returns a random catch phrase attribute., Returns a random catch phrase verb., catchPhrase + 1 more (~940 tok)
- `DateTime.php` — Czech months and days without setting locale (~456 tok)
- `Internet.php` — Declares Internet (~85 tok)
- `Payment.php` — International Bank Account Number (IBAN) (~182 tok)
- `Person.php` — Declares Person (~8294 tok)
- `PhoneNumber.php` — Declares PhoneNumber (~70 tok)
- `Text.php` — License: PD old 70 (~122795 tok)

## vendor/fakerphp/faker/src/Faker/Provider/da_DK/

- `Address.php` — Declares Address (~4244 tok)
- `Company.php` — Company: protected static $formats = [, Generates a P entity number (10 digits). (~498 tok)
- `Internet.php` — Declares Internet (~163 tok)
- `Payment.php` — International Bank Account Number (IBAN) (~182 tok)
- `Person.php` — Declares Person (~4321 tok)
- `PhoneNumber.php` — Declares PhoneNumber (~91 tok)
