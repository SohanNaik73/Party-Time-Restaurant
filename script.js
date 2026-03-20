function validateForm() {
    // 1. Get the elements
    let nameField = document.getElementById("name");
    let nameErr = document.getElementById("nameErr");
    
    // 2. Get the raw value
    let rawValue = nameField.value;
    let trimmedValue = rawValue.trim();

    // 3. Reset Error
    nameErr.innerText = "";
    nameErr.style.color = "red";

    // --- THE SPACE CHECK ---
    // If the very first character is a space, STOP.
    if (rawValue.charAt(0) === " ") {
        nameErr.innerText = "Error: Name cannot start with a space!";
        return false; // This prevents the PHP from running
    }

    // --- EMPTY CHECK ---
    if (trimmedValue === "") {
        nameErr.innerText = "Please enter your name.";
        return false;
    }

    return true; // Everything is okay, proceed to PHP
}