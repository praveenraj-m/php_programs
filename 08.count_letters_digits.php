<?php
// Program that Accepts a Sentence and Calculates the Number of Letters and Digits
function countLettersDigits($sentence) {
    $letters = 0;
    $digits = 0;

    for ($i = 0; $i < strlen($sentence); $i++) {
        if (ctype_alpha($sentence[$i])) {
            $letters++;
        } elseif (ctype_digit($sentence[$i])) {
            $digits++;
        }
    }

    return [$letters, $digits];
}

// Example usage
$userInput = readline("Enter a sentence: ");
[$letterCount, $digitCount] = countLettersDigits($userInput);

echo "Number of letters: $letterCount\n";
echo "Number of digits: $digitCount\n";
?>
