<?php

require 'functions.php';

$task = [
	"title" => "practice php for work",
	"due" => "tomorrow",
	"assigned_to" => "Kyle",
	"completed" => false
	];

$task[ "name" ] = "Kyle"; //push an item to the array.

// Lesson 10
//$animals = [ "dog", "cat" ];
//dd($animals);

if (checkIfMinor(19)) {
	echo "You are not old enough.";
}
else echo "Come on in!";


//unset($person["age"]); //unset removes an item from the array.

require "index.view.php";