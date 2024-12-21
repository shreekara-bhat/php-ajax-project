<?php
$servername = 'localhost';
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=db-one", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'connected';
} catch (PDOException $e) {
    echo '<br>' . $e->getMessage();
}

?>