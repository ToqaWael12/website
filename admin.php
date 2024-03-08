<?php
session_start();

// Check if the user is not logged in or is not an admin
if (!isset($_SESSION['id']) || $_SESSION['role'] !== "admin") {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Heading styles */
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Welcome message styles */
        .welcome-message {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Dashboard menu styles */
        .dashboard-menu {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        .dashboard-menu li {
            display: inline-block;
            margin-right: 20px;
        }

        .dashboard-menu li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .dashboard-menu li a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <p class="welcome-message">Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <ul class="dashboard-menu">
            <li><a href="admin_profile.php">Profile</a></li>
            <li><a href="manageusers.php">Manage Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>
