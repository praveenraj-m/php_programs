# php_programs
<details>
<summary> 1.Basic Calculator. </summary>
Explanation:<br>
In PHP, functions (add, subtract, multiply, divide) are defined to perform basic arithmetic operations.<br>
The readline function is used to take user input for two numbers, which are then cast to floats.<br>
The program echoes the results of the addition, subtraction, multiplication, and division of the two numbers.
</details>

<details>
<summary> 2.Number Guessing Game. </summary>
Explanation:<br>
The program uses the rand function to generate a random number between 1 and 100.<br>
It prompts the user to guess the number and provides feedback on whether the guess is too high or too low.<br>
The game continues until the correct number is guessed.
</details>

<details>
<summary>3. To-Do List App. </summary>
Explanation:<br>
The PHP script uses an array to store tasks, and the `readline` function is used to take user input.<br>
A menu is displayed with options to add tasks, view tasks, or quit the app.<br>
The app continues running until the user chooses to quit.
</details>

<details>
<summary> 4. Weather App. </summary>
Explanation:<br>
The program prompts the user to enter the city name and constructs a URL to fetch weather data using the OpenWeatherMap API.<br>
It uses `file_get_contents` to send an HTTP GET request and `json_decode` to process the JSON response.<br>
If the request is successful (status code 200), it extracts and displays the current temperature and weather description.<br>
In case of an error, it prints an error message.
</details>

<details>
<summary> 5. Hangman Game. </summary>
Explanation:<br>
The program selects a random word from a predefined list, and the player needs to guess the word by inputting letters.<br>
It displays the current state of the word with underscores for unguessed letters and updates it as the player guesses correctly.<br>
The player has a limited number of attempts (6 in this case) to guess the word.<br>
If the player guesses the word or runs out of attempts, the game ends.
</details>

<details>
<summary> 6. Basic Website Scraper. </summary>
Explanation:<br>
The PHP script uses `file_get_contents` to fetch the HTML content of 'https://www.google.com' and `DOMDocument` with XPath to parse the HTML.<br>
It then selects and prints the `href` attribute of all links (`a` tags) from the Google homepage.
</details>

<details>
<summary> 7. Basic File Handling. </summary>
Explanation:<br>
The PHP script demonstrates basic file handling operations - writing content to a file using `file_put_contents` and reading content from a file using `file_get_contents`.<br>
It writes a sample line to a file, then reads and prints the content of the file.
</details>

<details>
<summary> 8. Program that Accepts a Sentence and Calculates the Number of Letters and Digits. </summary>
Explanation:<br>
The PHP script defines a function `countLettersDigits` that takes a sentence as input and counts the number of letters and digits in it.<br>
It then takes user input, calls the function, and prints the counts of letters and digits in the entered sentence.
</details>

<details>
<summary> 9. Currency Converter. </summary>
Explanation:<br>
The PHP script defines a function `convertCurrency` that takes an amount, source currency, and target currency, and returns the converted amount.<br>
An example usage is provided, converting 100 USD to INR along with other predefined conversion rates.
</details>
