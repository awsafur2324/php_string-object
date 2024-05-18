<?php
function countVowels($string)
{
    // Count vowels in the string
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}



// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Iterate over each string in the array
foreach ($strings as $x) {
    // Count the number of vowels
    $vowelCount = countVowels($x);

    // Reverse the string
    $reversedString = strrev($x);

    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}