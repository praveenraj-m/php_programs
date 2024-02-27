<?php
function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=<>?/{}[]|';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }
    return $password;
}

// Example usage
$passwordLength = 12;
$generatedPassword = generateRandomPassword($passwordLength);
echo "Generated Password: " . $generatedPassword . "\n";
?>
