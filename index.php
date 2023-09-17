#!/usr/bin/php
<?php
// Check if the command-line argument is provided
if ($argc < 2) {
    echo "Usage: ./alphacount <sentence>\n";
    exit(1);
}

// Get the input sentence from the command line argument
$sentence = $argv[1];

// Use a regular expression to count alphabetic characters (letters)
$alphabeticCount = preg_match_all('/[a-zA-Z]/', $sentence, $matches);

if ($alphabeticCount !== false) {
    echo "Total alphabetic characters: $alphabeticCount\n";
} else {
    echo "Error occurred while counting alphabetic characters.\n";
    exit(1);
}
