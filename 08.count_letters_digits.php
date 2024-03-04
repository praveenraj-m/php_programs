<?php
// Program that Accepts a Sentence and Calculates the Number of Letters and Digits

// Function to count the number of letters and digits in a given sentence
function countLettersDigits($sentence) {
    // Initialize counters for letters and digits
    $letters = 0;
    $digits = 0;

    // Iterate through each character in the sentence
    for ($i = 0; $i < strlen($sentence); $i++) {
        // Check if the character is a letter (alphabetical)
        if (ctype_alpha($sentence[$i])) {
            $letters++;
        }
        // Check if the character is a digit
        elseif (ctype_digit($sentence[$i])) {
            $digits++;
        }
    }

    // Return an array containing the counts of letters and digits
    return [$letters, $digits];
}

// Example usage
// Get user input for a sentence
$userInput = readline("Enter a sentence: ");

// Call the countLettersDigits function and store the results in variables
[$letterCount, $digitCount] = countLettersDigits($userInput);

// Display the results
echo "Number of letters: $letterCount\n";
echo "Number of digits: $digitCount\n";
?>
