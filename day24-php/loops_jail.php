<?php
// while loop
// Define a variable $time_served and initialize it with the value 0.
// Write a while loop that would run as long as the value of $time_served is less than 10.
// During each iteration of the loop:
// Increase the value of $time_served by 1.
// Print out the sentence The prisoner has served X years where X is the value of $time_served

$time_served =0;
while ($time_served < 10) {
  $time_served++;
  echo "<br>";
  echo "The prisoner has served {$time_served} years";
}

//do .. while loop
//Make a copy of the loop from the previous exercise.
//Rewrite it into the do ... while form.
$time_served = 0;
do {
  $time_served ++;
  echo "The prisoner has served {$time_served} years";
  echo "<br>";
}
while ($time_served < 10);

//for loop
// Write a for loop that would run exactly 5 times.
// In each iteration of the loop print a sentence The prisoner has X more years to serve where X will be 5 - current loop number.
for ($time_served = 0; $time_served < 5; $time_served ++ ) {
  echo "The prisoner has " . (5 - $time_served) . "more years to serve";
  echo "<br>";
}

// Write a for loop like in the previous exercise.
// This time start with value 10 in the initialization statement and decrease it by 1 in the change statement.
// In each iteration print the sentence The prisoner has X more years to serve. where X will be the current value of the iterator.
// In each iteration also print the sentence Going to a parole hearing....
// If the current iterator is bigger than 5 skip the iteration right after the first sentence (ie. when the prisoner has more than 5 years to serve he will not go to the parole hearing).
// When the current iterator is 2 print out the sentence Paroled! and break off the entire loop.
for ($time_served = 10; $time_served > 0; $time_served-- ) {
  echo "The prisoner has {$time_served} more years to serve.";
  echo "<br>";
  if ($time_served > 5) {
    continue;
    
  }
  echo "Going to a parole hearing..";
  if ($time_served == 2) {
    echo "Paroled!";
    break;
  
  } 
}
