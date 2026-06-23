# Evan Darya Kusuma Portfolio

A Laravel portfolio website with Blade, Vite, Tailwind CSS, project pages, expandable capability panels, and a small backend for contact messages.

## Requirements

- PHP 8.5+
- Composer
- Node.js and npm

## Setup

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
php artisan serve
```

Open `http://127.0.0.1:8000`.

Laravel's current installer guidance for 13.x expects PHP, Composer, and Node/NPM to be installed before running the app. If those are missing on Windows, Laravel documents the `php.new` installer path for PHP 8.5.

## Backend

- Contact form submissions post to `POST /contact`.
- Messages are validated by `app/Http/Requests/StoreContactMessageRequest.php`.
- Messages are stored with `app/Models/ContactMessage.php`.
- The database table is created by `database/migrations/2026_06_22_000001_create_contact_messages_table.php`.
- Backend health/content counts are available at `GET /backend/status`.

## Vercel deployment

This project is Laravel + Blade + Vite, so it should not be deployed as a plain Vite static app. The Vercel setup uses `api/index.php` as the PHP entrypoint and `vercel.json` to route Laravel pages through the community PHP runtime while serving built assets from `public/build`.

Use these Vercel settings:

```text
Framework Preset: Other
Root Directory: ./
Install Command: composer install --no-dev --prefer-dist --optimize-autoloader
Build Command: npm ci && npm run build
Output Directory: public
```

Add these environment variables in Vercel:

```env
APP_NAME="Evan Portfolio"
APP_ENV=production
APP_KEY=base64:your-generated-key
APP_DEBUG=false
APP_URL=https://your-vercel-domain.vercel.app
ASSET_URL=https://your-vercel-domain.vercel.app
LOG_CHANNEL=stderr
CACHE_STORE=array
SESSION_DRIVER=cookie
QUEUE_CONNECTION=sync
```

Generate `APP_KEY` locally with `php artisan key:generate --show`. The contact form needs an external production database if you want stored submissions on Vercel; local SQLite storage is not durable on serverless deployments.

## Customize

- Portfolio content lives in `routes/web.php`.
- The main page template lives in `resources/views/portfolio.blade.php`.
- Styling lives in `resources/css/app.css` and `tailwind.config.js`.
- The hero image is `public/images/portfolio-hero.png`.
