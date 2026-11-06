# PHP & MySQL Blog Application

A fully functional CRUD web application built with PHP and MySQL, featuring user authentication, advanced search and pagination, and robust security enhancements.

---

## Features & Project Tasks

* **Task 1: Development Environment & Version Control**
  * Built using a local XAMPP server environment (PHP and MySQL).
  * Version controlled and managed via Git and GitHub.

* **Task 2: Basic CRUD Application & Authentication**
  * **Database Setup:** MySQL database (`blog`) containing `posts` and `users` tables.
  * **CRUD Operations:** Create, Read, Update, and Delete blog posts.
  * **Authentication:** Secure user registration and login utilizing password hashing (`password_hash()`) and session management.

* **Task 3: Advanced Features & UI Improvements**
  * **Search Functionality:** Real-time search by post title or content.
  * **Pagination:** Clean, numbered pagination links for browsing posts.
  * **User Interface:** Styled using custom CSS for a modern, responsive user experience.

* **Task 4: Security Enhancements**
  * **Prepared Statements:** All database queries utilize MySQLi prepared statements with parameter binding to prevent SQL Injection.
  * **Form Validation:** Dual-layered validation consisting of HTML5 client-side attributes and robust PHP server-side checks.
  * **Role-Based Access Control (RBAC):** Added user roles (`admin`, `user`) to control access permissions.

---

## Project Structure

```text
my_php_project/
│
├── db.php             # Database connection configuration
├── register.php       # User registration page
├── login.php          # User login page
├── logout.php         # Session destruction and logout script
├── dashboard.php      # Main dashboard with search and pagination
├── add_post.php       # Form and script to create new posts
├── edit_post.php      # Form and script to update existing posts
├── delete_post.php    # Script to handle post deletion
├── style.css          # Custom application stylesheet
├── SECURITY.md        # Security documentation
└── README.md          # Project overview and documentation