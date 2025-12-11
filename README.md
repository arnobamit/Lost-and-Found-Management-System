# 🏷️ Lost & Found Application

This is a PHP and MySQL-based web application designed to help users and administrators manage reported lost and found items. It features separate registration, login, and profile management for both user and admin roles, along with an administrative interface for managing product listings.

## ✨ Features

The application is structured around a dual-user model (User and Admin) and includes core functionalities for account and item management.

### User Features
* **User Registration (`user_reg.php`)**: Allows new users to register with fields including full name, email, phone, username, password, profile picture upload, user type (Student, Faculty, Alumni), registration date, and address. Server-side validation is performed by `action_page.php`.
* **User Login (`user_login.php`)**: Users can log in using their username, email, and password, with a "Remember Me" function using cookies.
* **User Profile (`user_profile.php`)**: Displays the user's personal information and uploaded profile picture, fetched from the database.
* **Password Reset (`user_forgetpass.php`)**: Allows users to reset their password by providing their username and email for verification.
* **Logout (`user_logout.php`)**: Destroys the session and redirects the user to the login page.

### Admin Features
* **Admin Registration (`admin_reg.php`)**: Allows new administrators to register with details including name, username, email, password, website/portfolio URL, profile picture, and gender.
* **Admin Login (`admin_login.php`)**: Administrators can log in using their username and password, also supporting a "Remember Me" function.
* **Admin Profile (`admin_profile.php`)**: Displays the admin's details, including profile picture, and links to logout and the product management page.
* **Password Reset (`admin_forgot_pass.php`)**: Allows admins to reset their password by verifying their username and email.
* **Product Management (`admin_products.php`)**: Allows administrators to view all reported items (products) in a table and provides a function to delete items from the database.
* **Logout (`admin_logout.php`)**: Destroys the admin session and redirects to the admin login page.

## 🏗️ Project Structure and Technology

The application follows a basic Model-View-Controller (MVC)-like structure using procedural PHP.

### Technologies
* **Frontend**: HTML, CSS (using custom CSS files like `user_reg.css` and `admin_reg.css`), JavaScript for client-side validation.
* **Backend**: PHP.
* **Database**: MySQL/MariaDB.
    * The database name is `"lost&found"`.
    * User functions connect without a password.
    * Admin/Product functions connect with password `"12345"`.

### Key Directories/Files
| File/Directory | Role |
| :--- | :--- |
| `control/` | Contains all action/logic files (`*_action.php`) responsible for form submission, validation, and database operations. |
| `model/db.php` | Handles database connection and admin/product specific queries (login, insert, fetch, delete). |
| `model/db2.php` | Handles database connection and user specific queries (login, insert, fetch). |
| `view/` | Contains the visible HTML pages (`*.php`) for login, registration, profile, and product management. |
| `css/` | Contains all styling files (`*.css`) for the application's aesthetic. |
| `uploads/` | Assumed directory structure (`uploads/users/` and `uploads/admins/`) for storing uploaded profile pictures and product images. |

## ⚙️ Setup and Installation

### Prerequisites

1.  A web server environment (e.g., XAMPP, WAMP, MAMP, or LAMP stack).
2.  MySQL/MariaDB database server.

### Steps

1.  **Clone or Download**: Place the project files into your web server's root directory (e.g., `htdocs/` or `www/`).
2.  **Database Configuration**:
    * Access your MySQL admin panel (e.g., phpMyAdmin).
    * Create a new database named `lost&found`.
    * **Note**: You will need tables named `admin`, `users`, and `products` for the application to function correctly.
        * The `admin` table must include columns like `username` and `email`.
        * The `users` table must include columns like `username` and `email`.
3.  **Database Credentials**:
    * Ensure the database connection in `model/db2.php` uses the correct credentials: `localhost`, `root`, and an empty string for the password `""`.
    * Ensure the database connection in `model/db.php` uses the correct credentials: `localhost`, `root`, and the password `"12345"`.
4.  **Access the Application**: Open your browser and navigate to the application's entry point (e.g., `http://localhost/lost&found/view/user_login.php`).

## ⚠️ Security Notes (Critical)

It is crucial to note that the provided PHP files do **not** use modern secure practices for passwords and SQL queries:

* **No Password Hashing**: Passwords are stored and compared in plaintext (e.g., `password='$newPassword'` in SQL queries). **This must be updated to use functions like `password_hash()` and `password_verify()`**.
* **SQL Injection Vulnerability**: The application uses string concatenation to build SQL queries (e.g., `$sql = "UPDATE admin SET password='$newPassword' WHERE username='$username'"`). **This is highly vulnerable to SQL Injection and must be converted to use prepared statements (e.g., `mysqli_prepare` or PDO)**.
* **File Upload Validation**: File upload handling is minimal and lacks proper validation for file type and size, posing a potential security risk.
