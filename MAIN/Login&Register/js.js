// script.js
document.addEventListener("DOMContentLoaded", function() {
    function navigate(section) {
        const content = document.getElementById('content');
        switch(section) {
            case 'dashboard':
                content.innerHTML = '<h2>Dashboard</h2><p>Welcome to the dashboard!</p>';
                break;
            case 'user-profile':
                content.innerHTML = '<h2>User Profile</h2><p>Manage your profile here.</p>';
                break;
            case 'book-parking':
                content.innerHTML = '<h2>Book Parking</h2><p>Book your parking slot.</p>';
                break;
            case 'safety-dashboard':
                content.innerHTML = '<h2>Unit Keselamatan Dashboard</h2><p>View safety reports and statistics.</p>';
                break;
            case 'manage-parking':
                content.innerHTML = '<h2>Manage Parking</h2><p>Manage parking slots and settings.</p>';
                break;
            case 'view-parking-slot':
                content.innerHTML = '<h2>View Parking Slot</h2><p>See all available parking slots.</p>';
                break;
            default:
                content.innerHTML = '<h2>Welcome</h2><p>Select an option from the menu.</p>';
        }
    }

    function logout() {
        // Perform logout operations here
        alert('Logging out...');
    }

    window.navigate = navigate;
    window.logout = logout;
});
