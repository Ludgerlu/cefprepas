# CEFPREPAS

CEFPREPAS is a professional training center focused on livestock, fish farming and agriculture. The project is built as a Laravel website that presents the institution, promotes its training programs, and allows prospective students to discover opportunities, submit applications, and contact the school.

Founded in 2018 and recognized by the Cameroonian Ministry of Employment and Vocational Training (MINEFOP), CEFPREPAS aims to train skilled professionals for the agricultural and rural economy while supporting youth employment and sustainable development.

## Project overview

This application includes:

- a modern public-facing landing page and institutional presentation
- training and field program listings
- student testimonials and partner showcase
- news and events sections
- online registration form for future students
- contact and document management
- an admin dashboard for managing formations, inscriptions, events, resources and partners
- multilingual support for French and English content

## Key features

- Dynamic course catalog for agricultural, livestock and fish farming programs
- Student registration workflow with form validation
- Contact form for inquiries and support requests
- Event and news management for public communication
- Gallery and document management
- Admin panel to manage content and registrations
- Responsive design for desktop and mobile users

## Tech stack

- PHP 8.1+
- Laravel 10
- MySQL / database-driven content
- Blade templating engine
- Vite for frontend assets
- Bootstrap-based frontend design

## Main project structure

- `app/` - business logic, controllers, models, middleware
- `config/` - application configuration
- `database/` - migrations and seeders
- `public/` - public assets and entry point
- `resources/` - Blade views, CSS, JS and language files
- `routes/` - application routes
- `storage/` - generated files and uploads
- `tests/` - automated tests

## Local setup

1. Clone the repository
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Create a local environment file:
   ```bash
   cp .env.example .env
   ```
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```
5. Configure your database connection in `.env`
6. Run the migrations:
   ```bash
   php artisan migrate
   ```
7. Install frontend dependencies:
   ```bash
   npm install
   ```
8. Start the asset watcher:
   ```bash
   npm run dev
   ```
9. Start the Laravel app:
   ```bash
   php artisan serve
   ```

Then open the application in your browser at the URL displayed by Artisan.

## Production notes

- Ensure the `.env` file contains the correct production database and mail credentials.
- Use `php artisan optimize` for improved performance in production.
- Secure the admin routes and keep all uploaded media in protected directories.

## License

This project is licensed under the MIT license.
