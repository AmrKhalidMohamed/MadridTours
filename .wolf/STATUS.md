# STATUS — MadridTours

> Single source of truth for resuming work. Read this FIRST when starting a session.
> Update this file at the end of every work phase so the next `/clear` resumes in 1 read.
> Last updated: 2026-08-04

---

## ✅ Done

- Fixed `trustProxies()` call order in `bootstrap/app.php` (Laravel 11) — `php artisan serve` now boots. `trustProxies()` must come before `withMiddleware()`/`withExceptions()`.
- Fixed missing Bootstrap/Tailwind styling on all `@vite` pages (dashboard, login, register, customers/tours/bookings/images). Root cause: stale `public/hot` file left from a crashed Vite dev server run; Laravel pointed `@vite` at `http://[::1]:5173/` which never loaded. Removed the stale file; pages now use built assets in `public/build/manifest.json`.
- Fixed Render startup failure caused by mixed-case `DB_CONNECTION` values. `config/database.php` and `config/queue.php` now lowercase the connection name before Laravel resolves it.
- Fixed dashboard lockout after database resets. Deploy startup now runs `migrate --seed`, and `AdminSeeder` creates a verified admin account if it is missing.
- Fixed uploaded image display in dashboard flows by normalizing image storage paths and URL generation, and by guarding storage symlink creation at container startup.
- Added route-based image file serving (`imagesview.file`) so uploaded images render without depending on direct `/storage` URL mapping.

---

## 🚀 Next phase

**Goal:** Confirm image previews load through the `imagesview.file` route on Render after redeploy.

### Acceptance criteria

1. Uploading an image from the dashboard stores the file and displays it in the images table using the route-based URL.
2. Existing records with `public/...` image paths still render correctly through the same route.

### Files to create / edit

| Type | File              | Content        |
| ---- | ----------------- | -------------- |
| new  | `path/to/file.ts` | _what it does_ |

### Closed decisions

- Render can continue using SQLite for this app; startup code now tolerates case variations in the `DB_CONNECTION` value.
- The admin login is bootstrapped by seed data instead of manual dashboard entry.

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
