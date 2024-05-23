document.getElementById('logoutForm').addEventListener('submit', function(event) {
    event.preventDefault();
    if (event.submitter.id === 'staySignedIn') {
        document.getElementById('message').textContent = 'You have chosen to stay signed in.';
        // stay sign in di sini
    } else if (event.submitter.id === 'logMeOut') {
        document.getElementById('message').textContent = 'You have been logged out.';
        // log out dekat sini
    }
});
