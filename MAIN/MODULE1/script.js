document.getElementById('logoutForm').addEventListener('submit', function(event) {
    event.preventDefault();
    if (event.submitter.id === 'staySignedIn') {
        document.getElementById('message').textContent = 'You have chosen to stay signed in.';
        // Stay signed in logic (if any) goes here
    } else if (event.submitter.id === 'logMeOut') {
        document.getElementById('message').textContent = 'You have been logged out.';
        // Redirect to the logout PHP script to handle session destruction
        window.location.href = 'logout.php';
    }
});
