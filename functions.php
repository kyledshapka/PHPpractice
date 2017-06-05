<?php

// dd stands for die, dump.
function dd($data) {
	die(var_dump($data));
	// die is a built-in function that prevents following code from executing.
	// var_dump is a built-in function that converts to string.
}

function checkIfMinor($age) {
	if ($age < 18) {
		return true;
	}
	else return false;
}