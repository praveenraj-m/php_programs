<?php
// Function to generate a random password
function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=<>?/{}[]|';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        // Generate a random index to pick a character from the $characters string
        $randomIndex = random_int(0, strlen($characters) - 1);
        // Append the selected character to the password
        $password .= $characters[$randomIndex];
    }
    // Return the generated password
    return $password;
}

// Example usage
$passwordLength = 12;
// Call the function to generate a random password
$generatedPassword = generateRandomPassword($passwordLength);
// Display the generated password
echo "Generated Password: " . $generatedPassword . "\n";
?>
