document.getElementById('submit').addEventListener('click', function() {
    const parkingId = document.getElementById('parking-id').value;
    // Clear the input field after getting the value
    document.getElementById('parking-id').value = '';
    fetch(`/api/parking/${parkingId}`)
        .then(response => response.json())
        .then(data => {
            const parkingInfo = document.getElementById('parking-info');
            parkingInfo.innerHTML = '';
            if (data.length) {
                data.forEach(row => {
                    const rowElement = document.createElement('tr');
                    rowElement.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.space}</td>
                        <td>${row.status}</td>
                        <td>${row.availability}</td>
                    `;
                    parkingInfo.appendChild(rowElement);
                });
            } else {
                // Display "Invalid Information" message if no data found
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td colspan="4">Invalid Information</td>
                `;
                parkingInfo.appendChild(row);
            }
        })
        .catch(error => console.error('Error fetching data:', error));
});
