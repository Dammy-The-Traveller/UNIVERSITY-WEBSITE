# Accra Institute of Technology (AIT) Website

A custom PHP web application for the Accra Institute of Technology, featuring a lightweight MVC-inspired framework with routing, database management, and authentication capabilities.

## Overview

This project is a feature-rich institutional website for AIT with sections for admissions, academics, student life, health care, and more. It uses a custom PHP framework built from scratch, featuring:

- **Custom Routing System**: RESTful routes with HTTP method support (GET, POST, PUT, PATCH, DELETE)
- **Database Layer**: PDO-based MySQL abstraction with query building
- **Authentication & Sessions**: Built-in session management and authentication middleware
- **Validation**: Form validation with custom exception handling
- **Middleware Support**: Request filtering and authorization
- **Service Container**: Dependency injection container for managing services

## Project Structure

```
AIT/
├── Public/                 # Web-accessible entry point
│   ├── index.php          # Application bootstrap
│   └── assets/            # CSS, JS, images, fonts
├── core/                  # Framework core
│   ├── App.php            # Service container manager
│   ├── Router.php         # Routing engine
│   ├── Database.php       # Database abstraction
│   ├── Validator.php      # Form validation
│   ├── Session.php        # Session management
│   ├── Response.php       # HTTP responses
│   ├── Authenticator.php  # Authentication logic
│   ├── functions.php      # Helper functions
│   └── middleware/        # Request middleware
├── Http/
│   ├── Controllers/       # Application controllers
│   └── forms/            # Form definitions
├── views/                 # HTML templates
│   ├── About-Us/
│   ├── Academics/
│   ├── Admissions/
│   ├── Health-Care/
│   ├── Student-Life/
│   └── partials/         # Reusable template components
├── config.php            # Database configuration
├── route.php             # Route definitions
├── bootstrap.php         # Service container setup
├── composer.json         # Dependencies
└── accra_institute_of_technology.sql  # Database schema

```

## Requirements

- **PHP 8.0+** (recommended PHP 8.1+)
- **MySQL 5.7+** or **MariaDB 10.3+**
- **Composer** (for dependency management)
- **Apache** or **Nginx** with mod_rewrite enabled

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/AIT.git
cd AIT
```

### 2. Install Dependencies

```bash
composer install
```

This will install:
- `illuminate/collections` - Laravel's collection utilities
- `pestphp/pest` - Testing framework (dev dependency)

### 3. Database Setup

1. Create a MySQL database:
```sql
CREATE DATABASE accra_institute_of_technology CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. Import the database schema:
```bash
mysql -u root -p accra_institute_of_technology < accra_institute_of_technology.sql
```

3. Update database credentials in `config.php`:
```php
return [
  'database' => [
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'accra_institute_of_technology',
    'charset' => 'utf8mb4'
  ]
];
```

### 4. Configure Web Server

**Apache (.htaccess already configured):**
```
Place the project in your web root (e.g., /wamp64/www/AIT)
Access via: http://localhost/AIT/public/
```

**Nginx:**
```nginx
server {
    listen 80;
    server_name localhost;
    root /path/to/AIT/Public;
    
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    
    location ~ \.php$ {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

### 5. Start Development Server

Using PHP built-in server:
```bash
cd Public
php -S localhost:8000
```

Then visit: `http://localhost:8000`

## Usage

### Defining Routes

Edit `route.php` to define your routes:

```php
// GET request
$router->get("/", "index.php");

// POST request
$router->post("/login", "user/login.php");

// Other HTTP methods
$router->put("/update", "update.php");
$router->delete("/delete", "delete.php");
$router->patch("/patch", "patch.php");

// With middleware
$router->get("/dashboard", "dashboard.php")->only('auth');
```

### Creating Controllers

Controllers are located in `Http/Controllers/`. Example:

```php
<?php
// Http/Controllers/index.php
view('index.view.php', ['data' => $data]);
```

### Using the Database

```php
<?php
use core\App;

$db = App::resolve('core\Database');

// Query
$results = $db->query('SELECT * FROM users WHERE id = ?', [1])->find();

// Get all results
$allResults = $db->query('SELECT * FROM users')->get();

// Find or fail (404 if not found)
$user = $db->query('SELECT * FROM users WHERE id = ?', [1])->findOrFail();
```

### Form Validation

```php
<?php
use core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Password must be at least 7 characters.';
}

if (!empty($errors)) {
    return view('register.view.php', ['errors' => $errors]);
}
```

### Session & Flash Messages

```php
<?php
use core\Session;

// Set flash message
Session::flash('success', 'Account created successfully!');

// Get flash message in view
<?php if ($success = Session::get('success')): ?>
    <p><?= htmlspecialchars($success) ?></p>
<?php endif; ?>
```

### Authentication

```php
<?php
use core\Authenticator;

$authenticator = new Authenticator();

// Login
if ($authenticator->attempt($email, $password)) {
    // Success
}

// Check if logged in
if (auth()) {
    // User is authenticated
}

// Get current user
$user = auth()->user;
```

## Available Routes

### Home
- `GET /` - Home page

### About
- `GET /index.php/about.php` - About page
- `GET /index.php/Visions-Missions.php` - Vision & Mission
- `GET /index.php/University-Leadership.php` - Leadership
- `GET /index.php/Ait-President.php` - President Info
- `GET /index.php/Privacy-Policy.php` - Privacy Policy
- And more...

### Admissions
- `GET /index.php/Application-Form.php` - Application form
- `GET /index.php/How-to-apply.php` - How to apply
- `GET /index.php/Instant-Online-registration.php` - Online registration
- `GET /index.php/Check-Admission-Status.php` - Check admission status
- And more...

### Academics
- `GET /index.php/All-Programs.php` - View all programs
- `GET /index.php/Tutition&Fees.php` - Tuition & fees

### Student Life
- `GET /index.php/Accomodation.php` - Accommodation info
- `GET /index.php/Campus-Facilities.php` - Campus facilities
- And more...

See `route.php` for the complete list of routes.

## Testing

This project uses **Pest PHP** for testing. Run tests with:

```bash
./vendor/bin/pest
```

Or with verbose output:
```bash
./vendor/bin/pest --verbose
```

## File Naming Convention

- **Views**: `*.view.php`
- **Controllers**: Plain `.php` files in `Http/Controllers/`
- **Models**: In `Http/Models/` (if used)
- **Middleware**: In `core/middleware/`

## Helper Functions

The `core/functions.php` file provides utility functions:

- `base_path($path)` - Get absolute path from project root
- `view($file, $data = [])` - Render a view file
- `auth()` - Get current authenticated user
- `abort($code)` - Throw HTTP exception
- `dd($value)` - Dump and die
- And more...

## Configuration

### Database Configuration

Edit `config.php`:

```php
return [
  'database' => [
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'accra_institute_of_technology',
    'charset' => 'utf8mb4'
  ]
];
```

### Default MySQL Credentials

The database uses default MySQL credentials:
- Username: `root`
- Password: `""` (empty)

Update the Database constructor in `bootstrap.php` to use different credentials.

## Security Notes

⚠️ **Important Security Recommendations:**

1. **Never commit sensitive data**: Database credentials should be stored in environment variables
2. **Use prepared statements**: Always use parameterized queries to prevent SQL injection
3. **Validate all input**: Use the Validator class for all user input
4. **Escape output**: Use `htmlspecialchars()` when displaying user data
5. **HTTPS**: Use HTTPS in production
6. **CORS**: Configure CORS headers appropriately

## Common Issues

### 1. Routes Not Working
- Ensure mod_rewrite is enabled in Apache
- Check that `.htaccess` is present in the Public directory
- Verify base path configuration

### 2. Database Connection Failed
- Check database credentials in `config.php`
- Ensure MySQL is running
- Verify database exists: `accra_institute_of_technology`

### 3. Class Not Found
- Run `composer dump-autoload` to regenerate the autoloader
- Ensure proper namespace usage

### 4. Views Not Rendering
- Check that view files exist in `views/` directory
- Verify file names match exactly (case-sensitive on Linux)
- Check for syntax errors in the view file

## Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/your-feature`
3. Commit your changes: `git commit -m 'Add your feature'`
4. Push to the branch: `git push origin feature/your-feature`
5. Submit a pull request

## License

This project is licensed under the MIT License - see LICENSE file for details.

## Author

**Dammy The Traveller**
- Email: adebesindamilare39@gmail.com

## Support

For issues, questions, or suggestions, please open an issue on the GitHub repository.

## Roadmap

- [ ] API endpoints
- [ ] Enhanced admin panel
- [ ] Email notifications
- [ ] Student portal
- [ ] Payment integration
- [ ] Advanced reporting

---

**Last Updated:** February 2026
