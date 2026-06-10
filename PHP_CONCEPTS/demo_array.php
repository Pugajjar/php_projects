<?php

// Creating an array
$numbers = array(10, 20, 30);

echo "<h3>Original Array</h3>";
print_r($numbers);

echo "<br><br>";


// --------------------------------------------------
// array_push() → Add element at end
// --------------------------------------------------

array_push($numbers, 40);

echo "<h3>After array_push()</h3>";
print_r($numbers);

echo "<br><br>";


// --------------------------------------------------
// array_pop() → Remove last element
// --------------------------------------------------

array_pop($numbers);

echo "<h3>After array_pop()</h3>";
print_r($numbers);

echo "<br><br>";


// --------------------------------------------------
// array_unshift() → Add element at beginning
// --------------------------------------------------

array_unshift($numbers, 5);

echo "<h3>After array_unshift()</h3>";
print_r($numbers);

echo "<br><br>";


// --------------------------------------------------
// array_shift() → Remove first element
// --------------------------------------------------

array_shift($numbers);

echo "<h3>After array_shift()</h3>";
print_r($numbers);

echo "<br><br>";


// --------------------------------------------------
// count() → Count total elements
// --------------------------------------------------

echo "<h3>Total Elements</h3>";
echo count($numbers);

echo "<br><br>";


// --------------------------------------------------
// sort() → Sort array in ascending order
// --------------------------------------------------

sort($numbers);

echo "<h3>After sort()</h3>";
print_r($numbers);

echo "<br><br>";


// --------------------------------------------------
// in_array() → Search value in array
// --------------------------------------------------

if(in_array(20, $numbers))
{
    echo "20 Found in Array";
}
else
{
    echo "20 Not Found";
}

echo "<br><br>";


// --------------------------------------------------
// array_reverse() → Reverse array
// --------------------------------------------------

$reverseArray = array_reverse($numbers);

echo "<h3>After array_reverse()</h3>";
print_r($reverseArray);

?>