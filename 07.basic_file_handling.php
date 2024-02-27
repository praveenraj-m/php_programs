<?php
// Basic File Handling
$file_path = 'example.txt';

// Writing to a file
file_put_contents($file_path, 'Hello, this is a sample file.' . PHP_EOL);

// Reading from a file
$content = file_get_contents($file_path);
echo $content;
?>
