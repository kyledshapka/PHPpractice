<?php

// dd stands for die, dump.
function dd($data) {
    echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
	// die is a built-in function that prevents following code from executing.
	// var_dump is a built-in function that converts to string.
}