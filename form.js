// Get references to the checkbox and the anchor tag (submit button)
const checkbox = document.getElementById('termsCheckbox');
const submitButton = document.getElementById('submit-btn');

// Listen for changes to the checkbox to enable/disable the link
checkbox.addEventListener('change', function() {
    if (checkbox.checked) {
        // Enable the link when the checkbox is checked
        submitButton.href = "userdash.html";  // Set the URL to navigate to
    } else {
        // Disable the link when the checkbox is unchecked
        submitButton.href = "#";  // Set to "#" so the link does nothing
    }
});

// Check if the checkbox is checked before navigating
function checkCheckbox(event) {
    if (!checkbox.checked) {
        event.preventDefault();  // Prevent the default action (navigation)
        alert("Please check the checkbox before proceeding.");
    }
}
