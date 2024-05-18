<?php
function countVowels($string)
{
    // Count vowels in the string
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// loop through each string
foreach ($strings as $x) {
    // Count the number of vowels
    $vowelCount = countVowels($x);

    // Reverse the string
    $reversedString = strrev($x);

    // Show output
    echo "Original String: $x, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
