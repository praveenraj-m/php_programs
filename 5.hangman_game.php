<?php
// Hangman Game
function hangmanGame() {
    $words = ["python", "java", "programming", "computer", "hangman", "developer"];
    $secretWord = $words[array_rand($words)];
    $guessedLetters = [];
    $maxAttempts = 6;
    $attempts = 0;

    while ($attempts < $maxAttempts) {
        $displayWord = "";

        foreach (str_split($secretWord) as $letter) {
            if (in_array($letter, $guessedLetters)) {
                $displayWord .= $letter;
            } else {
                $displayWord .= "_ ";
            }
        }

        echo "Current Word: " . $displayWord . "\n";
        $guess = strtolower(readline("Guess a letter: "));

        if (in_array($guess, $guessedLetters)) {
            echo "You already guessed that letter. Try again.\n";
        } elseif (strpos($secretWord, $guess) !== false) {
            echo "Good guess!\n";
            $guessedLetters[] = $guess;
        } else {
            echo "Incorrect guess.\n";
            $attempts++;
        }

        if (count(array_unique(str_split($secretWord))) === count($guessedLetters)) {
            echo "Congratulations! You guessed the word: " . $secretWord . "\n";
            break;
        }
    }

    if ($attempts === $maxAttempts) {
        echo "Sorry, you ran out of attempts. The correct word was: " . $secretWord . "\n";
    }
}

// Run the Hangman Game
hangmanGame();
?>
