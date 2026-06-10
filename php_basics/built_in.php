
<?php

echo "<h2>PHP Built-in Functions Demonstration</h2>";

/* ==========================
   STRING FUNCTIONS
========================== */
echo "<h3>String Functions</h3>";

$str = "Hello PHP World";

echo "strlen(): " . strlen($str) . "<br>";
echo "strtoupper(): " . strtoupper($str) . "<br>";
echo "strtolower(): " . strtolower($str) . "<br>";
echo "substr(): " . substr($str, 6, 3) . "<br>";
echo "str_replace(): " . str_replace("PHP", "Java", $str) . "<br>";
echo "strpos(): " . strpos($str, "PHP") . "<br>";

/* ==========================
   ARRAY FUNCTIONS
========================== */
echo "<h3>Array Functions</h3>";

$arr = [10, 20, 30, 40, 50];

echo "count(): " . count($arr) . "<br>";
echo "max(): " . max($arr) . "<br>";
echo "min(): " . min($arr) . "<br>";

sort($arr);
echo "sort(): ";
print_r($arr);
echo "<br>";

array_push($arr, 60);
echo "array_push(): ";
print_r($arr);
echo "<br>";

echo "array_sum(): " . array_sum($arr) . "<br>";

/* ==========================
   MATHEMATICAL FUNCTIONS
========================== */
echo "<h3>Math Functions</h3>";

$num = 25.75;

echo "abs(-10): " . abs(-10) . "<br>";
echo "sqrt(25): " . sqrt(25) . "<br>";
echo "pow(2,5): " . pow(2,5) . "<br>";
echo "round($num): " . round($num) . "<br>";
echo "floor($num): " . floor($num) . "<br>";
echo "ceil($num): " . ceil($num) . "<br>";
echo "rand(): " . rand(1,100) . "<br>";

/* ==========================
   DATE & TIME FUNCTIONS
========================== */
echo "<h3>Date Functions</h3>";

echo "date(): " . date("Y-m-d H:i:s") . "<br>";
echo "time(): " . time() . "<br>";

/* ==========================
   TYPE CHECKING FUNCTIONS
========================== */
echo "<h3>Type Checking</h3>";

$x = 100;
$y = "PHP";

echo "is_int(x): " . (is_int($x) ? "True" : "False") . "<br>";
echo "is_string(y): " . (is_string($y) ? "True" : "False") . "<br>";
echo "is_numeric('123'): " . (is_numeric('123') ? "True" : "False") . "<br>";

/* ==========================
   VARIABLE FUNCTIONS
========================== */
echo "<h3>Variable Functions</h3>";

$name = "John";

echo "isset(name): " . (isset($name) ? "True" : "False") . "<br>";

unset($name);

echo "empty(name): " . (empty($name) ? "True" : "False") . "<br>";

/* ==========================
   JSON FUNCTIONS
========================== */
echo "<h3>JSON Functions</h3>";

$data = [
    "name" => "Alice",
    "age" => 25
];

$json = json_encode($data);

echo "json_encode(): " . $json . "<br>";

$decoded = json_decode($json, true);

echo "json_decode(): ";
print_r($decoded);
echo "<br>";

/* ==========================
   FILE FUNCTIONS
========================== */
echo "<h3>File Functions</h3>";

$file = "sample.txt";

file_put_contents($file, "Hello PHP");

echo "file_exists(): " . (file_exists($file) ? "Yes" : "No") . "<br>";
echo "filesize(): " . filesize($file) . " bytes<br>";
echo "file_get_contents(): " . file_get_contents($file) . "<br>";

/* ==========================
   NUMBER FORMATTING
========================== */
echo "<h3>Formatting Functions</h3>";

echo "number_format(): " . number_format(1234567.891, 2) . "<br>";

/* ==========================
   INFORMATION FUNCTIONS
========================== */
echo "<h3>PHP Information</h3>";

echo "PHP Version: " . phpversion() . "<br>";

?>
