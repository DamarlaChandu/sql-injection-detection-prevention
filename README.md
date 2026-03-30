# SQL Injection Detection & Prevention System

## 📌 Overview
This project demonstrates SQL Injection vulnerabilities in web applications and implements secure coding techniques to prevent such attacks. It shows how attackers can bypass authentication and how to fix it using secure practices.

---

## 🚀 Features
- SQL Injection attack demonstration
- Authentication bypass simulation
- Error-based SQL Injection analysis
- Secure login using prepared statements
- Input validation and sanitization

---

## 🛠️ Tech Stack
- PHP
- MySQL
- HTML, CSS
- XAMPP (Apache Server)
- phpMyAdmin

---

## ⚙️ Setup Instructions

### 🔹 Step 1: Start XAMPP
1. Open XAMPP Control Panel  
2. Start **Apache**  
3. Start **MySQL**

---

### 🔹 Step 2: Create Project Folder
Go to:C:\xampp\htdocs
Create folder:sql_injection_lab

Add files:
- home.php  
- index.php  
- login.php  
- db.php  

---

### 🔹 Step 3: Create Database (phpMyAdmin)
1. Open browser:**http://localhost/phpmyadmin**
2. Click **New**
3. Create database:sqli_lab
4. Click **Create**

---

### 🔹 Step 4: Create Users Table
Go to **SQL tab** and run:

---sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);
---
### 🔹Step 5: Insert Test User
INSERT INTO users (username, password)
VALUES ('admin', 'admin123');

---
### 🔹 Step 6: Run the Project

Open:**http://localhost/sql_injection_lab/home.php**

🧪 Testing
✅ Normal Login
Username: admin
Password: admin123
✔️ Result: Login Successful
⚠️ SQL Injection Attack

Enter:

' OR 1=1 -- -
Password: anything

✔️ Result: Login Successful

👉 Demonstrates authentication bypass

🔐 Prevention Implemented
Prepared Statements (Parameterized Queries)
Input Validation
Secure Database Query Execution

🎯 Learning Outcomes
Understanding SQL Injection attacks
Identifying web vulnerabilities
Implementing secure coding practices
Working with XAMPP and phpMyAdmin
