# Car4Sure - Backend (Laravel API)

This is the backend of the **Car4Sure Insurance Policy Management System**, built with **Laravel** and **Sanctum** for API authentication. It provides a RESTful API for creating, reading, updating, and deleting car insurance policies.

---

## Tech Stack

- PHP 8+
- Laravel 12
- MySQL
- Laravel Sanctum (SPA Authentication)
- Laravel PDF (DomPDF)

---


## Backend: Laravel (PHP Framework)

I chose **Laravel** as the backend framework due to its elegant syntax, powerful built-in features, and it's robust ecosystem. Laravel simplifies common tasks such as:

- Database management via Eloquent ORM  
- Route handling and middleware  
- Form request validation  
- Authentication using Sanctum  
- API development with clear structure and security
- It's ideal for building scalable and maintainable RESTful APIs with ease.

---

## Features

- User Registration & Login (Sanctum)
- Policy CRUD (Create, Read, Update, Delete)
- Authenticated access: each user only sees their own policies
- Policy PDF document generation (downloadable)
- RESTful API with validation and error handling

---

## Setup Instructions

```bash
git clone https://github.com/MfundoM/car4sure-api.git
cd car4sure-api

# Install dependencies
composer install

# Create environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure your .env with DB credentials
# Run migrations
php artisan migrate

# Start the dev server
php artisan serve
