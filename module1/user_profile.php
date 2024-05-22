<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_connect.php';

$username = isset($_SESSION['search_username']) ? $_SESSION['search_username'] : $_SESSION['username'];

if (!$username) {
    header('Location: login.php');
    exit();
}

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
$stmt->execute([$username]);
$user = $stmt->fetch();

if (!$user) {
    echo "User not found.";
    exit();
}

// Unset the search username session variable
unset($_SESSION['search_username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>User Profile</h2>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
        <p><strong>Role:</strong> <?php echo htmlspecialchars($user['role']); ?></p>
        <?php if ($user['role'] === 'student'): ?>
            <p><strong>Student Role:</strong> <?php echo htmlspecialchars($user['student_role']); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
