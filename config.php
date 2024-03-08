
<?php
    $dsn = 'mysql:host=localhost;dbname=task';
    $username = 'root';
    $password = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    try {
        $conn = new PDO($dsn, $username, $password, $options);
        echo " ";
    }
    catch(PDOException $e) {
        echo 'Connection Failed' . $e->getMessage();
    }
    ?>
