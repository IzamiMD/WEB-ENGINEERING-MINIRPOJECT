document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.editButton').forEach(button => {
        button.addEventListener('click', function() {
            let type = this.getAttribute('data-type');
            let newValue = prompt(`Enter new ${type}:`);
            if (newValue) {
                document.getElementById(type).textContent = newValue;
            }
        });
    });

    document.getElementById('editProfilePicture').addEventListener('click', function() {
        alert('Edit Profile Picture clicked!');
        // Implement profile picture editing functionality here
    });

    document.getElementById('updateInfo').addEventListener('click', function() {
        alert('Information updated!');
        // Implement update information functionality here
    });

    document.getElementById('deleteAccount').addEventListener('click', function() {
        alert('Account deleted!');
        // Implement delete account functionality here
    });

    document.getElementById('createNewUser').addEventListener('click', function() {
        alert('Create new user clicked!');
        // Implement create new user functionality here
    });
});
