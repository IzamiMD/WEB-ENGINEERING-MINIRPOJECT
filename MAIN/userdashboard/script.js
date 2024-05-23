document.addEventListener('DOMContentLoaded', function() {
    // Mock data for the chart
    const violationData = {
        good: 75,
        bad: 25
    };

    // Mock data for time spent in the system
    const timeSpent = {
        days: 12,
        hours: 5,
        minutes: 30
    };

    // Update the time spent text
    const timeSpentText = `${timeSpent.days} days, ${timeSpent.hours} hours, and ${timeSpent.minutes} minutes`;
    document.getElementById('timeSpent').textContent = timeSpentText;

    // Create the violation status chart
    const ctx = document.getElementById('violationChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Good', 'Bad'],
            datasets: [{
                data: [violationData.good, violationData.bad],
                backgroundColor: ['#28a745', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Violation Status'
                }
            }
        }
    });
});
