<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("db.php");

$message = "";
$color = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "Login Successful";
        $color = "green";
    } else {
        $message = "Invalid Credentials";
        $color = "red";
    }

} else {
    $message = "No form submitted";
    $color = "orange";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            width: 320px;
            text-align: center;
        }

        h2 {
            color: <?php echo $color; ?>;
        }

        a {
            text-decoration: none;
            background: green;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
<div class="result-box">
    <h2><?php echo $message; ?></h2>
    <a href="index.php">Back to Login</a>
</div>

</body>
</html>
