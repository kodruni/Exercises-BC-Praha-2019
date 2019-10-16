<?php

$first_name = 'Aryuna';
$surname = 'Shoynzhonova';

echo "First name: " . $first_name; // or echo 'First name: ' . $first_name . '<br>';
echo "<br>";
echo "Surname: " . $surname;// or echo "Surname:{$surname}";
echo "<br>";

$year_of_birth = 1983;
$height = 165 . "cm";

echo $year_of_birth; //or echo "Year of birth: {$year_of_birth}<br>;
echo "<br>";        // Height: {$height}<br>";
echo $height;       

define ('SERVER_SOFTWARE', 'Apache');
echo '<br>';
echo 'This server is running on ' . SERVER_SOFTWARE;

define ('MY_OS', 'Windows');
echo '<br>';
echo 'My operating system is ' . MY_OS;

function greet ($whom) 
{
  return 'Hello, ' . $whom . '!'; //you can just echo instead of return to simply print
}
echo '<br>';
echo greet('Prague');            

//passing by reference
// It will accept two arguments:        ing.
// $string passed by reference (you
// Declare a function named truncateStr must figure out how to do it)
// $size
// The purpose of this function is to truncate the $string to the length of $size.
// Inside of the body of the function use the built-in PHP function mb_substr (you must research it!) to do the necessary task.
// After you declare it, you can test it like this:

function truncateString (&$string, $size)
{
  $string = mb_substr($string, 0, $size);
  
}
$sentence = 'Quick brown fox jumps over the lazy dog';
truncateString($sentence, 10);
echo $sentence; //prints 'Quick brow'


// Define a variable $days_to_christmas and initialize it with an appropriate value.
// Write a while loop that would run as long as the value of $days_to_christmas is more than 0.
// During each iteration of the loop:
// Decrease the value of $days_to_christmas by 1.
// Print out the sentence There are still X days to christmas where X is the value of $days_to_christmas
$days_to_christmas = 76;
while ($days_to_christmas > 0) {
  $days_to_christmas--;
  echo "There are still {$days_to_christmas} days to Xmas.<br>";
}

//do while --- does/runs something at least once, then checks the condition
do {
  $days_to_christmas--;
  echo  "There are still {$days_to_christmas} days to Xmas.<br>";
} while ($days_to_christmas > 0);

//for
for ($days_to_christmas = 76; $days_to_christmas > 0; $days_to_christmas--) {
  echo "There are still {$days_to_christmas} days to Xmas.<br>";
}

