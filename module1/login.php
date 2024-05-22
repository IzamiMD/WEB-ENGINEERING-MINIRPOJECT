<?php
session_start();
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ? AND role = ?');
    $stmt->execute([$username, $role]);
    $user = $stmt->fetch();

    if ($user && $user['password'] === $password) {
        $_SESSION['role'] = $role;
        $_SESSION['username'] = $username;

        if ($role === 'admin') {
            header('Location: admindashboard.php');
        } else {
            header('Location: user_profile.php');
        }
        exit();
    } else {
        $error_message = 'Invalid username, password, or role';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FK PARK Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <header>
                <img src="FKOM.png" alt="Logo" class="logo">
                <span>FK PARK</span>
            </header>
            <h2>Login</h2>
            <form id="loginForm" method="POST">
                <div class="form-group">
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Select your role</option>
                        <option value="student">Student</option>
                        <option value="staff">Staff</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit">LOG IN</button>
                <?php if (isset($error_message)): ?>
                    <p id="errorMessage" class="error-message"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </form>
        </div>
        <div class="right-panel">
            <p>If you don't already have an account click the button below</p>
            <button onclick="window.location.href = 'no_registration.php';" >Create account</button>
            <img src="parking.png" alt="Image" id="parkingpic">
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <p>Did you forget your password</p>
            <button onclick="window.location.href = 'forgotpassword.php';">Forgot password</button>
        </div>
    </div>
</body>
</html>
