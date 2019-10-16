<?php

$cars_i_want = [];
var_dump($cars_i_want);

// adding items to an array
// Without modifying the code from the previous exercise,
// add several items into your $cars_i_want array, one by one
// (one statement for every car). Let them be automatically 
// numerically indexed (i.e. specify no keys when adding them).
array_push($cars_i_want, 
"Aston Martin",
"Bugatti",
"Ferrari",
"Lamborghini",
"Maserati",
"Mercedes",
"Porsche",
"Skoda");
//by 1: $cars_i_want[] = 'Maserati'; and so on

var_dump($cars_i_want); // echo $cars_i_want; ----- gives 'array to string conversion

// retrieving array values
// Print the following sentences using values that you retrieve from the $cars_i_want array by their numeric keys:
// For myself I would buy ABC.<br> where ABC will be the name of the car in the list with the key 1.
// For my spouse I would buy XYZ.<br> where XYZ will be the name of the car in the list with the key 3.
// Now write another statement (don't change previous code) to change the value of item with key 4 to 'Smart'.
// Print the sentence Each of my kids will get a DEF.<br> where DEF will be the name of the car in the list with the key 4.
echo "For myself I would buy " . $cars_i_want[1] . "." . "<br>";
echo "For my spouse I would buy ". $cars_i_want[3] . "." . "<br>";
$cars_i_want[4] = "Smart";
var_dump($cars_i_want);
echo "Each of my kids will get a " . $cars_i_want[4] . "." . "<br>";

// foreach loop
// Take the array from the previous exercises.
// Print the tag for start of a HTML unordered list.
// For each item in the array print a line <li>Car name</li> 
//where 'Car name' is the value of the current array item.
// Print the tag for the end of a HTML unordered list.
foreach ($cars_i_want as $car) {
  echo "<ul>" . "<li>" . $car . "</li>" . "</ul>";
}
//better: 
// echo '<ul>';
// foreach .... {
//   echo "<li>{$car}</li>";
// }
// echo '</ul>';

//Associative arrays
// first print this sentence: You can have a Porsche for just
// 1150000 CZK. by inserting the number 1150000 into the string
// from the array.
$car_prices = [
  'Skoda Octavia' => 270000,
  'Volkswagen Golf' => 170000,
  'BMW X6' => 380000,
  'Porsche 911' => 1150000
];

echo "You can have a Porsche for just " . $car_prices['Porsche 911'] . "CZK.";
//alt
// $key = array_search (1150000, $car_prices);
// var_dump($key);

foreach ($car_prices as $car_name => $car_price) {
  echo "The price of {$car_name} is {$car_price} CZK.</br>";
}

