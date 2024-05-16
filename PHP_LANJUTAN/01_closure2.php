<?php 

// Create a math function.
function math(Closure $type, $first, $second) {

    // Execute the closure with parameters
    return $type($first, $second);
}

// Create an addition closure.
$addition = function ($first, $second) {
    // Add the values.
    return $first + $second;
};

// Create an subtraction closure.
$subtraction = function ($first, $second) {
    // Subtract the values.
    return $first - $second;
};

// Execute math function.
echo math($addition, 2, 2);
echo PHP_EOL; // New line!
echo math($subtraction, 5, 3);