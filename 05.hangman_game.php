<?php
// Hangman Game
function hangmanGame() {
    // Array of words for the game
    $words = ["python", "java", "programming", "computer", "hangman", "developer"];

    // Select a random word from the array
    $secretWord = $words[array_rand($words)];

    // Array to store guessed letters
    $guessedLetters = [];

    // Maximum number of attempts allowed
    $maxAttempts = 6;

    // Counter for attempts
    $attempts = 0;

    // Main game loop
    while ($attempts < $maxAttempts) {
        $displayWord = "";

        // Display the word with underscores for unguessed letters
        foreach (str_split($secretWord) as $letter) {
            if (in_array($letter, $guessedLetters)) {
                $displayWord .= $letter;
            } else {
                $displayWord .= "_ ";
            }
        }

        // Display the current state of the word
        echo "Current Word: " . $displayWord . "\n";

        // Get user input for letter guess
        $guess = strtolower(readline("Guess a letter: "));

        // Check if the letter has already been guessed
        if (in_array($guess, $guessedLetters)) {
            echo "You already guessed that letter. Try again.\n";
        } elseif (strpos($secretWord, $guess) !== false) {
            // If the guessed letter is in the word, update guessed letters array
            echo "Good guess!\n";
            $guessedLetters[] = $guess;
        } else {
            // Incorrect guess, increment attempts counter
            echo "Incorrect guess.\n";
            $attempts++;
        }

        // Check if all unique letters of the word have been guessed
        if (count(array_unique(str_split($secretWord))) === count($guessedLetters)) {
            echo "Congratulations! You guessed the word: " . $secretWord . "\n";
            break;
        }
    }

    // Check if the maximum attempts are reached
    if ($attempts === $maxAttempts) {
        echo "Sorry, you ran out of attempts. The correct word was: " . $secretWord . "\n";
    }
}

// Run the Hangman Game
hangmanGame();
?>
