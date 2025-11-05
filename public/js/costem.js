// public/js/custom.js

document.addEventListener('DOMContentLoaded', function() {
    // Example of custom JavaScript functionality

    // Highlight table rows on hover
    const rows = document.querySelectorAll('.table tbody tr');
    rows.forEach(row => {
        row.addEventListener('mouseover', function() {
            this.style.backgroundColor = '#e9ecef';
        });
        row.addEventListener('mouseout', function() {
            this.style.backgroundColor = '';
        });
    });

    // Example alert when the page is loaded
    console.log('Appointment details page loaded.');
});
