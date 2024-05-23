<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FK PARK Logout</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <header>
                <td><img src="FKOM.png" alt="Logo" class="logo"></td>
                <td>FK PARK</td>
            </header>
            <h2>LOG OUT?</h2>
            <form id="logoutForm">
                <div class="form-group">
                    <button type="submit" id="staySignedIn" name="staySignedIn">Stay Signed In</button>
                </div>
                <div class="form-group">
                    <button type="submit" id="logMeOut" name="logMeOut">Log Me Out</button>
                </div>
                <p id="message" class="message"></p>
            </form>
        </div>
        <div class="right-panel">
            <img src="sad.png" alt="Image" id="parkingpic">
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <p>Having trouble? <a href="support.html">Contact support</a></p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
