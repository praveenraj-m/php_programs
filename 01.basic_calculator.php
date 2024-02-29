<?php
// Basic Calculator

// Function to add two numbers
function add($x, $y) {
    return $x + $y;
}

// Function to subtract two numbers
function subtract($x, $y) {
    return $x - $y;
}

// Function to multiply two numbers
function multiply($x, $y) {
    return $x * $y;
}

// Function to divide two numbers, checking for division by zero
function divide($x, $y) {
    if ($y != 0) {
        return $x / $y;
    } else {
        return "Cannot divide by zero";
    }
}

// Get user input for the numbers
$num1 = (float) readline("Enter the first number: ");

$num2 = (float) readline("Enter the second number: ");

// Output the results of various operations
echo "Addition: " . add($num1, $num2) . "\n";
echo "Subtraction: " . subtract($num1, $num2) . "\n";
echo "Multiplication: " . multiply($num1, $num2) . "\n";
echo "Division: " . divide($num1, $num2) . "\n";
?>
