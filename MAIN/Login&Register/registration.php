<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_connect.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

$success_message = '';
$search_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $student_role = $_POST['student_role'];

    $stmt = $pdo->prepare('INSERT INTO users (username, password, role, student_role) VALUES (?, ?, ?, ?)');
    $stmt->execute([$username, $password, 'student', $student_role]);

    $success_message = 'Student registered successfully';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
    $search_username = $_POST['search_username'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$search_username]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['search_username'] = $search_username;
        header('Location: user_profile.php');
        exit();
    } else {
        $search_message = 'No user found with that username';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Register Student</h2>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <select name="student_role" required>
                    <option value="" disabled selected>Select role</option>
                    <option value="Undergraduate">Undergraduate student</option>
                    <option value="Postgraduate">Postgraduate student</option>
                </select>
            </div>
            <button type="submit" name="register">Register</button>
            <?php if ($success_message): ?>
                <p class="success-message"><?php echo $success_message; ?></p>
            <?php endif; ?>
        </form>

        <h2>Search Student</h2>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="search_username" placeholder="Username" required>
            </div>
            <button type="submit" name="search">Find</button>
            <?php if ($search_message): ?>
                <p class="error-message"><?php echo $search_message; ?></p>
            <?php endif; ?>
            <button onclick="window.location.href='admindashboard.php'">GO BACK</button>
        </form>
    </div>
</body>
</html>
