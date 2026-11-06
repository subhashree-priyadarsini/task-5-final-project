# Security Enhancements Documentation

## 1. SQL Injection Prevention
- All database queries across login, registration, adding posts, editing posts, and deleting posts have been updated to use **MySQLi Prepared Statements** with parameter binding (`prepare()` and `bind_param()`)[span_2](start_span)[span_2](end_span).

## 2. Form Validation & XSS Defense
- **Client-Side Validation:** Input fields utilize HTML5 attributes like `required` and `minlength`[span_3](start_span)[span_3](end_span).
- **Server-Side Validation:** PHP scripts check for empty values and ensure data integrity prior to execution[span_4](start_span)[span_4](end_span).
- **XSS Prevention:** Output data is safely handled using `htmlspecialchars()`[span_5](start_span)[span_5](end_span).

## 3. User Roles & Access Control
- Passwords are securely hashed using `password_hash()` and verified with `password_verify()`[span_6](start_span)[span_6](end_span).
- **Role-Based Access Control (RBAC):** A `role` column manages administrative vs. standard user privileges[span_7](start_span)[span_7](end_span).