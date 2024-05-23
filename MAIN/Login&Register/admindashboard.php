<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <button onclick="window.location.href='userdashboard/Leftpage.html'">GO TO MAIN ACCOUNT</button>
        <button onclick="window.location.href='registration.php'">REGISTRATION PAGE</button>
    </div>
</body>
</html>
