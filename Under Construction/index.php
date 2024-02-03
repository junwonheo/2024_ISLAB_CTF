<?php
$username='';
$password='';
session_start();
$FLAG = file_get_contents('./flag.txt');
if(isset($_COOKIE['adminCookie']) && $_COOKIE['adminCookie'] === "TH15_15_4DM1N_CO0K13"){
    echo "<script>alert('{$FLAG}')</script>";
    exit;
}
if(isset($_POST['username']) && isset($_POST['password'])){
    echo "<script>alert('Under Construction..')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="text"], input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<!-- hint: .swp -->
<div class="login-container">
    <h2>Login Page</h2>
    <form method="post">
        Username: <input type="text" name="username" placeholder="Username" required>
        Password: <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>