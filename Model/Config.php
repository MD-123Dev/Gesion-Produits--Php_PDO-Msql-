<?php
$dsn = 'mysql:host=localhost;dbname=vende';
$username = 'root';
$password = '';
$options = [];
try {
    $connection = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
}
