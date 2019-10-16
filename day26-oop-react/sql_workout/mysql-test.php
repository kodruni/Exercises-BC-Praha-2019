<?php

require_once 'DB/DB.php';
require_once 'DB/DB_functions.php';
require_once 'Country.php';
require_once 'Region.php';


//connect to a database
connect('localhost', 'world', 'root', 'rootroot');

//prepare  a query string
// select('SELECT * FROM `country`');

//or this way:
// $query = 'SELECT
//  * FROM `country`
//  WHERE `Population` > 20000000
// ';
//run the query (takes up to 3 arg)
// $results = select ($query, [], 'Country');
// var_dump($results);

// $results = select($query, [], 'Country');

// $populations = array_map(function($country) {
//   return $country->getFormattedPopulation();
// }, $results);

// var_dump($populations);

// $query = "
//   SELECT *
//   FROM `Country`
//   WHERE `Code` = '?'
//   LIMIT 1
// ";
// $czech_rep = select_one($query, ['CZE'], 'Country');
// var_dump($czech_rep);

//MySQL insert

// $region = new Region;
// $region-> name = 'Central Africa';
// $region-> slug = 'that-green-part-of-africa';
// $region->insert();

// echo 'A new region was inserted with id'. $region->id . '<br>';

// update the slug of central america
// $query = "
//   SELECT *
//   FROM `region`
//   WHERE `name` = ?
// ";

// $central_africa = select_one($query, ['Central Africa'], 'Region');

// var_dump($central_africa);

// $central_africa->slug = 'central-africa';
// $central_africa->update();

//DELETE
$query = "
  SELECT *
  FROM `Region`
  WHERE `id` = ?
  ";
$deleted_central_africa = select($query, ['Central Africa'], 'Region');
var_dump($deleted_central_africa);
// $deleted_central_africa->delete();