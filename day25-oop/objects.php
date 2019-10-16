<?php

require_once 'User.php';

$steve = new User;

//access the property & assign value
$steve->id = 1; 
$steve->username='steve';
$steve->name='Stephen';
// var_dump($steve);
// var_dump($steve->$name);
$steve->dumpMe();

$bob = new User('bob');
$bob->dumpMe();