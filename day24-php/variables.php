<?php
// scope of functions in php is blank//
//unset () ----- delete something//

$foo = 123;
//declare a var

function bar() 
{
  //$foo is not defined
}

//in JS
//function bar() {
//  const foo = 123;
//}
//const is no more

//in PHP
//declare a const
define ('FOO', 123);


//passing by value:
function asses_number($a) 
{
  return $a > 10;
}

$number = 6;
$result = asses_number($number); //false

//passing by reference (saves memory, no additional copies of data created, allows to extract multiple values): 
function is_number_small(&$b) 
{
  $b++;
  return $b < 10;
}

$number = 6;
$result = is_number_small($number); 

//Write a function headline that would return HTML code for a headline.
//
//It would accept 2 arguments:
//
//the text within the headline (a string)
//a number 1-6 specifying the importance of the headline
//If the function was called with only one argument, the resulting headline will be a <h1>

function headline ($text, $value = 1) 
{
  return "<h{$value}>{$text}</h{$value}>";
}
// second parameter gets the default value 1
echo headline ('Main headline');

// second parameter gets given value 2
echo headline ('Secondary headline', 2);