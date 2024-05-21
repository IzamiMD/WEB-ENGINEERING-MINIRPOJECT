document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;

    // data ni nnti nak try connect dgn database
    const isValidUser = (username === 'student' && password === 'password123' && role === 'student') || 
                        (username === 'admin' && password === 'admin123' && role === 'admin') || 
                        (username === 'staff' && password === 'staff123' && role === 'staff');

    if (isValidUser) {
        window.location.href = 'dashboard.html';
    } else {
        const errorMessage = document.getElementById('errorMessage');
        errorMessage.textContent = 'Invalid username, password, or role';
        errorMessage.style.display = 'block';
    }
});
