Purpose: Help AI coding agents become productive quickly in this Laravel app.

- **Project Type**: Laravel 12 project with Jetstream + Fortify for auth, Sanctum for API tokens, Livewire for interactive UI, and Vite + Tailwind for frontend assets. Key manifests: `composer.json`, `package.json`, `vite.config.js`, `tailwind.config.js`.

- **Where core concepts live**:
  - **HTTP / controllers**: `app/Http/Controllers`
  - **Models**: `app/Models` (primary model: `app/Models/User.php`)
  - **Auth providers & actions**: `app/Providers/FortifyServiceProvider.php`, `app/Providers/JetstreamServiceProvider.php`, `app/Actions/Fortify/`, `app/Actions/Jetstream/`
  - **Blade components**: `resources/views/components` and `app/View/Components`
  - **Routes**: `routes/web.php`, `routes/api.php`
  - **Migrations & factories**: `database/migrations`, `database/factories` (e.g. `UserFactory.php`)
  - **Tests**: `tests/Feature`, `tests/Unit`

- **Primary developer workflows (commands you should call)**:
  - Install PHP deps: `composer install`
  - Install JS deps: `npm install`
  - Full local dev (runs server, queue listener, asset dev server): `composer run dev` (uses `concurrently` in `composer.json`)
  - Frontend dev server only: `npm run dev` (Vite)
  - Build production assets: `npm run build`
  - Run Laravel dev server: `php artisan serve`
  - Run migrations: `php artisan migrate` (migrations in `database/migrations` include two-factor & personal access tokens)
  - Run seeders: `php artisan db:seed`
  - Run tests: `php artisan test` or `./vendor/bin/phpunit`
  - Format code: use Laravel Pint: `./vendor/bin/pint`

- **Notable composer script**: `composer run dev` launches `php artisan serve`, `php artisan queue:listen`, `php artisan pail` and `npm run dev` concurrently — prefer it when iterating full-stack features.

- **Auth & API specifics**:
  - Auth flows are implemented via Fortify/Jetstream; to change registration/login behavior, edit `app/Actions/Fortify/*` and corresponding service provider `app/Providers/FortifyServiceProvider.php`.
  - API tokens are provided by Sanctum. See `config/sanctum.php`, migration `create_personal_access_tokens_table.php`, and `tests/Feature/ApiTokenPermissionsTest.php` for examples of expected token behavior and scopes.

- **Frontend conventions**:
  - Entrypoints: `resources/js/app.js`, `resources/css/app.css` (Tailwind configured via `tailwind.config.js`).
  - Compiled assets are placed under `public/build` with `manifest.json` (Vite).

- **Testing patterns**:
  - Tests use PHPUnit 11 and Laravel's testing helpers. Use factories from `database/factories` to construct test data.
  - Example test file: `tests/Feature/AuthenticationTest.php` demonstrates auth expectations.

- **Where to make quick changes**:
  - UI/Blade: `resources/views` and `resources/views/components`
  - Server-side logic: `app/Http/Controllers` and `app/Actions/*`
  - Routing: `routes/web.php` and `routes/api.php`

- **Cache / troubleshooting commands**:
  - Clear caches: `php artisan route:clear`, `php artisan config:clear`, `php artisan view:clear`
  - Rebuild caches: `php artisan config:cache`, `php artisan route:cache` (use carefully during development)

- **Files to reference when making non-trivial changes**:
  - `composer.json` — dependency versions and `dev` script
  - `package.json` — Vite/Tailwind scripts
  - `config/fortify.php`, `config/jetstream.php`, `config/sanctum.php`
  - `database/migrations/*` — schema expectations (two-factor, tokens)
  - `tests/Feature/*` — expected runtime behavior and regression examples

- **What NOT to assume**:
  - Do not assume a persisted `.env` is present — new checkouts may need environment setup (copy `.env.example` if available, set DB credentials or use SQLite as composer helper does).

- Feedback: if any section is unclear or you want deeper examples (e.g., common Fortify action edits, a representative test walkthrough, or the exact Vite entry points), tell me which area to expand.
