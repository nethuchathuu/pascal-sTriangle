function askContinue() {
    let repeat = prompt("Do you want to repeat? Press 'Y' for Yes, 'N' for No.");
    
    if (repeat.toLowerCase() === 'y') {
        return true;  // Allow form submission to happen
    } else if (repeat.toLowerCase() === 'n') {
        clearOutput(); // Clear output and reset the form if the user presses 'N'
        return false;
    } else {
        alert("Invalid input. The program will terminate.");
        clearOutput(); // Clear the output and reset the form for invalid input
        return false;
    }
}

// Event listener for form submission
document.getElementById('triangleForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    if (askContinue()) {
        this.submit(); // Submit the form only if the user presses 'Y'
    }
});

// JavaScript function to clear the output and reset the form
function clearOutput() {
    document.getElementById('triangleOutput').innerHTML = ''; // Clear the Pascal Triangle output
    document.getElementById('rowNumber').value = ''; // Reset the input field
}

// Function to reload the page when reset is clicked
function resetPage() {
    window.location.reload(); // Reloads the page
}
