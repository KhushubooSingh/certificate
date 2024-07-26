document.addEventListener('DOMContentLoaded', function() {
    const backButton = document.getElementById('backButton');
    
    backButton.addEventListener('click', function() {
        window.location.href = 'index_login.php'; // Redirect to the login page
    });
});



function validateDates() {
    const fromDate = new Date(document.getElementById('duration_from').value);
    const toDate = new Date(document.getElementById('duration_to').value);

    if (fromDate > toDate) {
        alert('The "Course Duration From" date cannot be after the "Course Duration To" date.');
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}
