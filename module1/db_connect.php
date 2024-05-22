<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$link = mysqli_connect($host, $user, $pass);

if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS fkpark";

if (mysqli_query($link, $sql)) {
    echo "Database created successfully\n";
} else {
    echo 'Error creating database: ' . mysqli_error($link) . "\n";
}

mysqli_close($link);
?>
