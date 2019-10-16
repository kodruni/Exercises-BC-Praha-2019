<?php

include 'data.php';
require_once 'Celebrity.php';

$celebrities = [];
foreach ($data as $item) {
  $celebrity = new Celebrity('name', 'photo', 'earnings', 'age', 'citizenship', 'events');
  $celebrity->fromArray($item);
  array_push($celebrities, $celebrity);
}

header('Content-type: application/json');
echo json_encode($celebrities);
