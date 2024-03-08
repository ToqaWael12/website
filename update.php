<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

/* Heading styles */
h1 {
    text-align: center;
    margin-top: 50px;
    color: #333;
}

/* Form container styles */
form {
    width: 300px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Form heading styles */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Form label styles */
label {
    display: block;
    margin-bottom: 10px;
    color: #333;
}

/* Form input styles */
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Submit button styles */
button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <h1>Change Password</h1>
    <form method="post">
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
        <button type="submit">Change Password</button>
    </form>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
if (isset($_POST['new_password'])) {
    $newPassword = $_POST['new_password'];
    require_once 'config.php'; 
    $sql = "UPDATE user SET password = :newPassword WHERE id = :userId";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
        ':newPassword' => $newPassword,
        ':userId' => $_SESSION['id']
    ));
    if ($stmt) {
        echo "Password updated successfully.";
    }
}
?>



