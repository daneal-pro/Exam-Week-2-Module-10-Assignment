<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function processString($string) {
  $vowelCount = 0;
  $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
  
  // Count vowels
  foreach (str_split($string) as $char) {
    if (in_array($char, $vowels)) {
      $vowelCount++;
    }
  }
  
  // Reverse string
  $reversedString = strrev($string);
  
  // Print results
  echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

foreach ($strings as $string) {
  processString($string);
}

?>
