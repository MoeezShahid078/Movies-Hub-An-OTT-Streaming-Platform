# 🎬 Movies Hub – OTT Streaming Platform  

Movies Hub is a feature-rich **OTT streaming platform** where users can watch movies, series, and exclusive content. The platform includes an admin panel for managing media and user accounts, offering a smooth entertainment experience.  

## 🚀 Features  
✅ **Admin Dashboard** – Upload, update, and delete movies, series, and episodes.  
✅ **User Management** – Admin can manage user accounts.  
✅ **User Authentication** – Secure login and registration system.  
✅ **Search & Filter** – Users can search for content based on genres and categories.  
✅ **Watch Online** – Stream movies and series directly from the platform.  

## 🛠️ Tech Stack  
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP, MySQL  
- **Server:** Apache (XAMPP)

### Installation Steps

#### 1. Local Environment Setup

1. Download and install XAMPP/WAMP/MAMP
2. Ensure Apache and MySQL services are running

#### 2. Database Configuration

1. Open phpMyAdmin
2. Create a new database:
   ```sql
   CREATE DATABASE toonhub
   CHARACTER SET utf8mb4 
   COLLATE utf8mb4_general_ci;
   ```
3. Import database schema:
   - Navigate to the `toonhub` database
   - Use the "Import" tab
   - Upload and execute the provided SQL file

#### 3. Project Deployment

1. Clone or copy the project to your web server's document root:
   - XAMPP: `C:\xampp\htdocs\toonhub`
   - WAMP: `C:\wamp\www\toonhub`

#### 4. Database Connection

Update `config.php` with your database credentials:

```php
<?php
$host = 'localhost';
$username = 'root';     // Default XAMPP/WAMP username
$password = '';         // Default XAMPP/WAMP password
$database = 'toonhub';
?>
```

### 🔐 Forgot Password Module

#### Overview

The `forgot.php` module provides a secure password reset mechanism:

- Generates time-limited reset tokens
- Sends password reset links via email
- Enhances user account security

#### Email Configuration

1. Open `forgot.php`
2. Configure SMTP settings:
   ```php
   $mail->Host = 'smtp.example.com';
   $mail->Username = 'your_email@example.com';
   $mail->Password = 'your_secure_app_password';
   ```

### 🌐 Accessing the Application

- Open your web browser
- Navigate to: `http://localhost/toonhub/index.php`
- Landing page: `index.php`

## 🛡️ Security Best Practices

- Use HTTPS in production environments
- Implement rate limiting
- Generate strong, unique tokens
- Secure email credentials
- Regularly update dependencies
- Use prepared statements to prevent SQL injection

## 🐛 Troubleshooting

### Common Issues

- Verify Apache and MySQL are running
- Check database connection settings
- Ensure proper file permissions
- Validate SMTP email configuration

## 📋 Additional Notes

- Default login credentials are included in the SQL import
- First-time setup may require additional configuration


**Note:** Always keep your credentials and sensitive information secure and never commit them to version control.

