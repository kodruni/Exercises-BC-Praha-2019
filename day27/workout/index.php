<?php

require_once 'api/DB.php';
require_once 'api/DB_functions.php';

connect('localhost', 'games', 'root', 'rootroot');

$query = 
'SELECT *
 FROM `games`
 WHERE 1';
// var_dump($results);


if (isset($_GET['orderby']) && $_GET['orderby'] == 'name') {
  if (isset($_GET['way']) && $_GET['way']== 'desc') {
    $query = "
    SELECT * 
    FROM `games`
    ORDER BY `name` DESC
    ";
  } else {
  $query = "
  SELECT * 
  FROM `games`
  ORDER BY `name` ASC
  ";
  }
}

if (isset($_GET['orderby']) && $_GET['orderby'] == 'rating') {
  if (isset($_GET['way']) && $_GET['way']== 'desc') {
    $query = "
    SELECT * 
    FROM `games`
    ORDER BY `rating` DESC
    ";
  } else {
  $query = "
  SELECT * 
  FROM `games`
  ORDER BY `rating` ASC
  ";
  }
}

$results = select($query);


header('Content-type: application/json');
echo json_encode($results);




