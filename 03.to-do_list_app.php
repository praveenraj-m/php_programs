<?php
// To-Do List App
$tasks = []; // Initialize an empty array to store tasks

while (true) {
    // Display menu options
    echo "1. Add Task\n";
    echo "2. View Tasks\n";
    echo "3. Quit\n";

    // Get user input for menu choice
    $choice = readline("Enter your choice: ");

    // Check user's choice and perform corresponding actions
    if ($choice == '1') {
        // Add a new task
        $task = readline("Enter a new task: ");
        $tasks[] = $task; // Add task to the array
    } elseif ($choice == '2') {
        // View tasks
        echo "Tasks:\n";
        foreach ($tasks as $index => $task) {
            echo ($index + 1) . ". $task\n"; // Display tasks with index numbers
        }
    } elseif ($choice == '3') {
        // Quit the program
        echo "Goodbye!\n";
        exit;
    } else {
        // Handle invalid choice
        echo "Invalid choice. Try again.\n";
    }
}
?>
