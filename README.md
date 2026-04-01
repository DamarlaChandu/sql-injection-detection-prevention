# 🛡️ SQL Injection Detection & Prevention System

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/MySQL-00000F?style=flat&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white" alt="HTML" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white" alt="CSS" />
  <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=flat&logo=xampp&logoColor=white" alt="XAMPP" />
</p>

## 📌 Overview
This project serves as an educational laboratory to demonstrate **SQL Injection (SQLi)** vulnerabilities in web applications. It provides hands-on experience showing how malicious actors can bypass authentication and, more importantly, implements robust, secure coding techniques to prevent such attacks.

---

## 🚀 Features
- **SQL Injection Attack Demonstration**: See firsthand how vulnerable queries operate.
- **Authentication Bypass Simulation**: Understand how attackers can log in without valid credentials.
- **Error-Based SQL Injection Analysis**: Analyze database errors to exploit or fix vulnerabilities.
- **Secure Login Systems**: Implement security using **Prepared Statements (Parameterized Queries)**.
- **Data Protection**: Input validation and sanitization techniques.

---

## 🛠️ Tech Stack
| **Technology** | **Usage** |
| :--- | :--- |
| **PHP** | Server-side logic & database connections |
| **MySQL** | Relational Database Management |
| **HTML / CSS** | Front-end UI & styling |
| **XAMPP** | Local Apache server & environment |
| **phpMyAdmin**| Database administration interface |

---

## ⚙️ Setup Instructions

> **Important:** Make sure you have [XAMPP](https://www.apachefriends.org/index.html) installed on your system before proceeding.

### 🔹 Step 1: Start XAMPP Environment
1. Open the **XAMPP Control Panel**.
2. Click **Start** next to **Apache**.
3. Click **Start** next to **MySQL**.

### 🔹 Step 2: Set Up the Project Files
1. Navigate to your XAMPP root directory (usually `C:\xampp\htdocs`).
2. Create a new folder named `sql_injection_lab`.
3. Ensure the core project files are in this folder:
   - `home.php`
   - `index.php`
   - `login.php`
   - `db.php`

### 🔹 Step 3: Create the Database via phpMyAdmin
1. Open your web browser and navigate to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Click on the **New** button in the left sidebar.
3. Enter `sqli_lab` as the database name.
4. Click **Create**.

### 🔹 Step 4: Provision the Database Structure
1. Select the `sqli_lab` database and go to the **SQL** tab.
2. Run the following code to create the `users` table:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);
```

### 🔹 Step 5: Insert Test Data
Run the following SQL snippet in the same **SQL** tab to add a test user:
```sql
INSERT INTO users (username, password)
VALUES ('admin', 'admin123');
```

### 🔹 Step 6: Run the Application
Open your browser and navigate to the project:
👉 [http://localhost/sql_injection_lab/home.php](http://localhost/sql_injection_lab/home.php)

---

## 🧪 Testing & Demonstration

### 1️⃣ Normal Login Workflow
- **Username:** `admin`
- **Password:** `admin123`
- ✔️ **Result:** Login Successful

### 2️⃣ ⚠️ SQL Injection Attack (Bypass)
- **Username:** `' OR 1=1 -- -`
- **Password:** *(any text or empty)*
- ✔️ **Result:** Login Successful!
> 👉 **Why?** This input manipulates the underlying database query structure, successfully demonstrating an authentication bypass vulnerability.

---

## 🔐 Preventative Measures Implemented
To patch the vulnerability, this project employs multiple security layers:
1. **Prepared Statements (Parameterized Queries):** Separates query logic from user input.
2. **Input Validation:** Ensures incoming data matches expected formats.
3. **Secure Database Execution:** Prevents user input from ever being interpreted as executable SQL statements.

---

## 🎯 Learning Outcomes
By exploring this project, you will achieve:
- ✅ A concrete understanding of how **SQL Injection attacks** operate.
- ✅ The ability to identify critical web vulnerabilities in authentication structures.
- ✅ Practical experience applying **secure coding practices** (e.g., Prepared Statements).
- ✅ Hands-on proficiency setting up environments with **XAMPP and phpMyAdmin**.

<br>
<p align="center">
  <i>Developed for Educational & Cybersecurity Awareness Purposes</i>
</p>
