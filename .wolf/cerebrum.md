# Cerebrum

> OpenWolf's learning memory. Updated automatically as the AI learns from interactions.
> Do not edit manually unless correcting an error.
> Last updated: 2026-08-03

## User Preferences

<!-- How the user likes things done. Code style, tools, patterns, communication. -->

## Key Learnings

- **Project:** MadridTours
- **Description:** <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red
- **Asset pipeline:** Bootstrap 5 CSS and JS are imported by `resources/js/app.js`; Tailwind directives remain in `resources/css/app.css`. Both entries are loaded by `@vite`.
- **Vite marker:** If `public/hot` remains after Vite stops, Laravel continues requesting assets from port 5173 instead of `public/build/manifest.json`, leaving `@vite` pages unstyled.

## Do-Not-Repeat

<!-- Mistakes made and corrected. Each entry prevents the same mistake recurring. -->
<!-- Format: [YYYY-MM-DD] Description of what went wrong and what to do instead. -->

- [2026-08-04] Do not treat `ApplicationBuilder::trustProxies()` as an ordering issue in Laravel 11. This builder has no such method; configure trusted proxies through the `withMiddleware()` callback or omit the call. Verify framework APIs before proposing a chain-order fix.
- [2026-08-04] When Vite-managed CSS appears missing, inspect `public/hot` and the rendered asset URLs before changing CSS imports. A stale marker can point Laravel at an inactive Vite server.
- [2026-08-04] Normalize `DB_CONNECTION` to lowercase before config resolution when deploy envs may supply mixed-case values. Laravel connection names are case-sensitive.
- [2026-08-04] If the dashboard requires `verified` authentication, seed a verified admin account during deploy/startup; an unseeded or unverified user row will lock you out even when migrations succeed.

## Decision Log

<!-- Significant technical decisions with rationale. Why X was chosen over Y. -->
