<?php
// Number Guessing Game

// Function to implement the Number Guessing Game
function numberGuessingGame() {
    $numberToGuess = rand(1, 100); // Generate a random number between 1 and 100
    $attempts = 0; // Initialize attempts counter

    while (true) {
        $userGuess = (int) readline("Guess the number (1-100): "); // Get user's guess
        $attempts++; // Increment the attempts counter

        // Check if the user's guess is correct
        if ($userGuess == $numberToGuess) {
            echo "Congratulations! You guessed the number in $attempts attempts.\n";
            break;
        } elseif ($userGuess < $numberToGuess) {
            echo "Too low. Try again.\n"; // Provide feedback for a low guess
        } else {
            echo "Too high. Try again.\n"; // Provide feedback for a high guess
        }
    }
}

// Run the game by calling the numberGuessingGame function
numberGuessingGame();
?>
