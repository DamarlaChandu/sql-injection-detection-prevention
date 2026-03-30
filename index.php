<!DOCTYPE html>
<html>
<head>
    <title>SQL Injection Demo Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            width: 320px;
            text-align: center;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            width: 95%;
            padding: 10px;
            background: green;
            color: white;
            border: none;
        }

        .hint {
            margin-top: 15px;
            color: gray;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login Page</h2>

    <form method="POST" action="login.php">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit">Login</button>
    </form>

</div>

</body>
</html>
