<?php
// To-Do List App
$tasks = [];

while (true) {
    echo "1. Add Task\n";
    echo "2. View Tasks\n";
    echo "3. Quit\n";

    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case '1':
            $task = readline("Enter a new task: ");
            $tasks[] = $task;
            break;
        case '2':
            echo "Tasks:\n";
            foreach ($tasks as $index => $task) {
                echo ($index + 1) . ". $task\n";
            }
            break;
        case '3':
            echo "Goodbye!\n";
            exit;
        default:
            echo "Invalid choice. Try again.\n";
    }
}
?>
