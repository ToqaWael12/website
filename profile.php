<?php
session_start();
// Check if $_SESSION['username'] is set before trying to access it
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Hello, $username!";
} else {
    echo "Session variable 'username' is not set.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
            <div>
                <a href="update.php">Change Password?</a>
            </div>
</form>
</body>
</html>
