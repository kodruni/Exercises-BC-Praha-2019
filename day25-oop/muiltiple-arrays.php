<?php

$movie_names = [
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0111161' => 'The Shawshank redemption',
  'tt0071562' => 'The Godfather II',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club',
  'tt0068646' => 'The Godfather',
];
$movie_ratings = [
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
];

$movies = [];

//sorting
//if you use sort() keys are lost
//instead: arsort();

foreach ($movie_names as $id => $name) {
  // 
  $rating = $movie_ratings[$id];
  // 
  $movie_info = 
  [
    'name' => $name,
    'rating' => $rating
  ];
  // 
  $movies[] = $movie_info;
}

//you can also try sorting with usort() (user-defined)
// usort($movies, function ($a, $b) {
//   if ($a[rating])
// })

header('Content-type: application/json');
echo json_encode($movies);