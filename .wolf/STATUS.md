# STATUS — MadridTours

> Single source of truth for resuming work. Read this FIRST when starting a session.
> Update this file at the end of every work phase so the next `/clear` resumes in 1 read.
> Last updated: 2026-08-04

---

## ✅ Done

- Fixed `trustProxies()` call order in `bootstrap/app.php` (Laravel 11) — `php artisan serve` now boots. `trustProxies()` must come before `withMiddleware()`/`withExceptions()`.
- Fixed missing Bootstrap/Tailwind styling on all `@vite` pages (dashboard, login, register, customers/tours/bookings/images). Root cause: stale `public/hot` file left from a crashed Vite dev server run; Laravel pointed `@vite` at `http://[::1]:5173/` which never loaded. Removed the stale file; pages now use built assets in `public/build/manifest.json`.
- Fixed Render startup failures caused by case-mismatched database connection names by normalizing `DB_CONNECTION` to lowercase in Laravel config.
- Hardened the Render startup script to lowercase `DB_CONNECTION` before Laravel boots, so runtime env casing cannot break migrations.

---

## 🚀 Next phase

**Goal:** Confirm the next Render deployment reaches the app successfully with no startup migration error.

### Acceptance criteria
1. Render deploy completes without `Database connection [SQLite] not configured`.
2. App starts and serves requests normally after migrations run.

### Files to create / edit
| Type | File | Content |
|---|---|---|
| none | _n/a_ | _monitor deployment result_ |

### Closed decisions
- Normalize `DB_CONNECTION` to lowercase in config so Render env casing cannot break startup.

### Open decisions
- None.

---

## 📁 Active architecture

- **Stack:** Laravel 11 (PHP ^8.2), Blade, Breeze. Front-end: Vite + Tailwind 3.4 + Bootstrap 5.3 (bundled together in `resources/js/app.js`).
- **Asset pipeline:** `resources/js/app.js` imports `bootstrap/dist/css/bootstrap.min.css` + `bootstrap/dist/js/bootstrap.bundle.min.js`; `resources/css/app.css` has only Tailwind directives. Build output: `public/build/manifest.json`.
- **Key tables / modules:** Customers, Tours, Bookings, Images (see `resources/views/pages/`).
- **Patterns:** `@vite(['resources/css/app.css', 'resources/js/app.js'])` in `layouts/app.blade.php`. Dashboard uses Bootstrap classes (`btn btn-success`, `d-flex`).

---

## ⚠️ External blockers (don't block coding)

- For dev hot-reload of CSS/JS, run `npm run dev` (creates `public/hot`; stop cleanly to remove it). A crashed/killed Vite leaves a stale `public/hot` — delete it or `@vite` pages will be unstyled. See bug-001.

---

## 🔧 Useful commands

```bash
php artisan serve          # app server (http://127.0.0.1:8000)
npm run dev                # Vite dev server (hot reload, port 5173)
npm run build              # production build → public/build/
# If @vite pages render unstyled: rm public/hot  (stale Vite marker)
```

---

## 📚 References (read IF needed)

- `.wolf/cerebrum.md` — User Preferences + Do-Not-Repeat + Decision Log
- `.wolf/anatomy.md` — token-efficient file index
- `.wolf/buglog.json` — known bugs + fixes
