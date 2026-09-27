# 🎓 SAM — Student Achievement Monitoring System

A web-based Student Achievement Monitoring System built with **PHP**, **MySQL**, and **JavaScript**. The system manages student records, grades, attendance (including RFID-based tracking), and teacher dashboards.

---

## 🔐 Login

The entry point of the system is the **Login / Registration page** (`index.php`).  
All users must authenticate before accessing any dashboard.

> **Live system access requires a hosted PHP + MySQL environment (e.g., XAMPP locally or a web host).**

---

## 👥 User Roles

| Role    | Dashboard                  | Capabilities                                                      |
|---------|----------------------------|-------------------------------------------------------------------|
| Admin   | `Admin_dashboard.php`      | Manage users, subjects, sections, view all records                |
| Teacher | `Dashboard_teacher.php`    | Manage grades, attendance, student records per subject            |
| Student | `dashboard_student.php`    | View own grades, attendance, and enrolled subjects                |

---

## ✨ Features

- 🔐 Secure login with account lockout protection
- 📧 Forgot password via email (PHP Mailer)
- 📊 Grade management and print-ready grade reports
- 📋 Manual and RFID-based attendance tracking
- 👤 Profile image uploads
- 📱 Mobile-responsive UI

---

## 🛠️ Tech Stack

- **Backend:** PHP 8+
- **Database:** MySQL (via MySQLi)
- **Frontend:** HTML, CSS, JavaScript
- **Email:** PHPMailer
- **Server:** Apache (XAMPP / InfinityFree)

---

## 🚀 Setup (Local)

1. Clone this repository into your `htdocs` folder:
   ```bash
   git clone https://github.com/klayn19/SAM.git
   ```
2. Import the database SQL file using **phpMyAdmin**.
3. Update `backend/config.php` with your database credentials.
4. Start Apache and MySQL via XAMPP.
5. Open `http://localhost/SAM_system/` in your browser — the **login page** will appear.

---

## 📁 Project Structure

```
SAM_system/
├── index.php                  # Login & Registration page
├── Admin_dashboard.php        # Admin panel
├── Dashboard_teacher.php      # Teacher dashboard
├── dashboard_student.php      # Student dashboard
├── backend/
│   ├── config.php             # DB connection
│   └── login_register.php     # Auth logic
├── CSS/                       # Stylesheets
├── uploads/                   # Profile images
└── phpmailer/                 # Email library
```

---

## 📄 License

This project is for academic purposes.
