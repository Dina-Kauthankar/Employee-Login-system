# Employee-Login-system
# Employee Registration & Login System (PHP + MySQL)

A simple **Employee Management Web Application** built using **PHP, MySQL, HTML, CSS, and JavaScript**.
This project demonstrates how to implement **user registration, authentication, session handling, and dashboard display** in a web application.

The system allows employees to:

* Register their information
* Log in securely
* View their stored profile details
* Log out using PHP sessions

This project is ideal for **beginners learning PHP and MySQL CRUD operations with authentication**.

---

# Features

* Employee Registration
* Secure Login System
* PHP Session Management
* User Dashboard
* Employee Details Display
* Logout Functionality
* Responsive Layout
* Simple and Clean UI

---

# Technologies Used

Frontend

* HTML5
* CSS3
* JavaScript

Backend

* PHP

Database

* MySQL

Server Environment

* Apache (XAMPP / WAMP / LAMP)

---

# Project Structure

```
# Project Structure

```
Register-Login/
│
├── config
│   └── db.php                # Database connection
│
├── css
│   └── style.css             # Website styling
│
├── js
│   ├── login.js              # Login form validation
│   └── register.js           # Registration form validation
│
├── pages
│   ├── login.html            # Login page
│   ├── register.html         # Employee registration page
│   └── user-board.php        # Employee dashboard
│
├── php
│   ├── login.php             # Login authentication logic
│   ├── logout.php            # Destroy session and logout
│   └── save_register.php     # Save employee registration data
│
└── index.php                 # Homepage
```

```

---

# Database Structure

Create a database named:

```



---

# Installation Guide

1. Install **XAMPP / WAMP / LAMP**

2. Start:

   * Apache
   * MySQL

3. Place the project inside:

```
htdocs
```

Example:

```
htdocs/Register-Login
```

4. Open **phpMyAdmin**

Create a database:

```
sms
```

5. Create the `employees` table using the SQL above.

6. Run the project in your browser:

```
http://localhost/Register-Login
```

---

# How the System Works

### 1. Registration

Users fill out the **registration form**, and the data is saved into the **MySQL database**.

### 2. Login

The login system checks:

* Email
* Password

If correct, a **PHP session is created**.

### 3. Dashboard

After login, the user is redirected to:

```
user-board.php
```

The page fetches the employee data from the database and displays it in a **table**.

### 4. Logout

Clicking logout destroys the session and redirects to the homepage.

---

# Learning Concepts Covered

This project demonstrates:

* PHP Sessions
* PHP Form Handling
* MySQL Database Integration
* User Authentication
* Basic Web Security Concepts
* Project Folder Organization

---

# Future Improvements

Possible improvements include:

* Password Hashing (`password_hash`)
* Admin Panel
* Employee Edit/Delete
* Profile Picture Upload
* Search Employees
* Pagination
* Role-based Access Control

---

# Author

**Dina Kauthankar**

GitHub:
https://github.com/Dina-Kauthankar

---

# License

This project is open-source and available for educational purposes.
