<?php
// Number Guessing Game
function numberGuessingGame() {
    $numberToGuess = rand(1, 100);
    $attempts = 0;

    while (true) {
        $userGuess = (int) readline("Guess the number (1-100): ");
        $attempts++;

        if ($userGuess == $numberToGuess) {
            echo "Congratulations! You guessed the number in $attempts attempts.\n";
            break;
        } elseif ($userGuess < $numberToGuess) {
            echo "Too low. Try again.\n";
        } else {
            echo "Too high. Try again.\n";
        }
    }
}

// Run the game
numberGuessingGame();
?>
