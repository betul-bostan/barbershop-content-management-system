# Barbershop Content Management System

A PHP and MySQL web application developed for managing barbershop content through an administrator panel.

The project includes a public-facing barbershop website and an authenticated management interface for adding, listing, updating, and deleting hairstyle or service-related content.

> **Note:** This project was developed for educational and portfolio purposes. It is not currently intended for production use.

## Project Overview

The application consists of two main parts:

1. A public barbershop website displaying services, brands, pricing information, and hairstyle models
2. An administrator panel used to manage dynamic content stored in a MySQL database

## Main Features

- Administrator login
- Session-based access control
- Content creation
- Content listing
- Content updating
- Content deletion
- Dynamic content retrieval from MySQL
- Hairstyle and service presentation
- Image-name management
- Reusable page and theme functions
- Responsive front-end components
- PHP, HTML, CSS, and JavaScript integration

## Administrator Panel

Authenticated administrators can:

- Add new hairstyle or service content
- Enter a title
- Add a slogan
- Add descriptive content
- Assign an image name
- Enter a short description
- List existing records
- Update existing records
- Delete records
- End the authenticated session

## Technologies

- PHP
- MySQL
- MySQLi
- HTML
- CSS
- JavaScript
- Session-based authentication

## Repository Structure

```text
barbershop-content-management-system/
├── fotolar/
├── javascript/
├── index.php
├── login.php
├── giris.php
├── logout.php
├── fonksiyonlar.php
├── metin_ekle.php
├── metin_listele.php
├── metin_guncelle.php
├── metin_sil.php
├── create_content.php
├── update_content.php
├── sayfa.php
├── tema.php
├── altsayfa.php
├── altsayfatema.php
├── detay.php
├── modeller.html
├── anasayfa.html
├── style.css
├── .env.example
├── .gitignore
└── README.md
```

## Requirements

To run this project, you need:

- PHP 8 or later
- MySQL or MariaDB
- Apache, Nginx, XAMPP, MAMP, or PHP's built-in server
- A modern web browser

## Installation

Clone the repository:

```bash
git clone https://github.com/betul-bostan/barbershop-content-management-system.git
cd barbershop-content-management-system
```

Create a MySQL database:

```sql
CREATE DATABASE phpuygulama
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
```

Configure the database connection using environment variables:

```text
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=
DB_NAME=phpuygulama
```

You can use the values shown in `.env.example` as a local development reference.

## Running the Application

Using PHP's built-in server:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000
```

The administrator login page is available at:

```text
http://localhost:8000/login.php
```

## Database Requirements

The current project expects at least the following tables:

### `kullanicilar`

Used for administrator authentication.

Expected fields include:

```text
kadi
ksifre
```

Passwords should be stored using PHP's `password_hash()` function.

### `makale`

Used for dynamically managed content.

Expected fields include:

```text
id
baslik_dizi
slogan_dizi
icerik_dizi
resim_dizi
kısa_dizi
```

A complete SQL schema should be added to the repository in a future version.

## Application Workflow

1. An administrator opens the login page
2. Login credentials are checked against the database
3. A PHP session is created after successful authentication
4. The administrator opens the management panel
5. Content can be created, listed, updated, or deleted
6. Public pages display the stored barbershop content
7. The administrator ends the session using the logout function

## Security Notes

The project should use:

- Prepared SQL statements
- Password hashing with `password_hash()` and `password_verify()`
- Session ID regeneration after login
- Access checks on every administration page
- Environment variables for database credentials
- Server-side form validation
- CSRF protection for create, update, and delete actions
- Escaping with `htmlspecialchars()` when displaying database content
- Secure image upload validation

## Current Limitations

- The SQL database schema is not included in the repository.
- Automated tests are not currently included.
- CSRF protection is not implemented.
- Some pages use basic HTML without a shared layout structure.
- Image handling currently relies mainly on filenames.
- Form validation is limited.
- The project has not been deployed.
- The administrator interface could be redesigned.
- The current file structure can be reorganized into clearer application layers.

## Future Improvements

- Add a complete SQL schema file
- Add secure image uploading
- Add CSRF tokens
- Use prepared statements in every database operation
- Add password hashing
- Add reusable authentication middleware
- Add form validation and user-friendly error messages
- Organize code into configuration, public, admin, and includes folders
- Add application screenshots
- Add automated tests
- Add Docker support
- Deploy the application
- Improve the administrator interface
- Add responsive mobile design

## Author

**Betül Bostan**

- [GitHub](https://github.com/betul-bostan)
- [LinkedIn](https://www.linkedin.com/in/bet%C3%BCl-bostan-2105942b2/)
