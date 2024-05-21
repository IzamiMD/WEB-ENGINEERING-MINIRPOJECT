<?php
include("connection.php")

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
                <td><img src="FKOM.png" alt="Logo" class="logo"></td>
                <td>FK PARK</td>
            </header>
            <h2>Login</h2>
            <form id="loginForm">
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
                <p id="errorMessage" class="error-message"></p>
            </form>
        </div>
        <div class="right-panel">
            <p>If you don't already have an account click the button below</p>
            <button>Create account</button>
            <img src="parking.png" alt="Image" id="parkingpic">
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <p>Did you forget your password</p>
            <button>Forgot password</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
