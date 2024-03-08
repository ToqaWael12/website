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

/* Container styles */
.container {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Form heading styles */
.container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Form input field styles */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

.form-group input[type="text"],
.form-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Form submit button styles */
.form-group button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-group button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
<div class="container">
        <h2>SIGN UP</h2>
        <form id="signup-form" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
            <label for="role">Role:</label>
            <input type="text" id="role" name="role" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </div> 
</body>
</html>
<?php 
require_once 'config.php';
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $sql="INSERT INTO user (username, password, role) VALUES (:uname, :pass, :rolee)" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
        ':uname'=>$username,
        ':pass'=>$password,
        ':rolee'=>$role
    ));
    if($stmt)
    echo "Registration Successful.";
}
?>