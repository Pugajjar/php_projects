<?php

// --------------------------------------------------
// PHP Date and Time Functions Demo Program
// --------------------------------------------------


// Setting Default Timezone
date_default_timezone_set("Asia/Kolkata");

echo "<h1>PHP Date and Time Functions</h1>";


// --------------------------------------------------
// 1. date() Function
// --------------------------------------------------
// Used to display current date and time
// --------------------------------------------------

echo "<h2>1. date() Function</h2>";

/*
d = Day
m = Month Number
Y = 4-digit Year
h = Hour
i = Minutes
s = Seconds
A = AM/PM
l = Full Day Name
F = Full Month Name
*/

// Display current date
echo "Current Date : " . date("d-m-Y");

echo "<br>";

// Display current time
echo "Current Time : " . date("h:i:s A");

echo "<br>";

// Display full formatted date
echo "Formatted Date : " . date("l, F d, Y");

echo "<hr>";


// --------------------------------------------------
// 2. time() Function
// --------------------------------------------------
// Returns current Unix Timestamp
// --------------------------------------------------

echo "<h2>2. time() Function</h2>";

$currentTimestamp = time();

echo "Current Timestamp : " . $currentTimestamp;

echo "<hr>";


// --------------------------------------------------
// 3. mktime() Function
// --------------------------------------------------
// Creates timestamp for custom date and time
// --------------------------------------------------

echo "<h2>3. mktime() Function</h2>";

/*
mktime(hour, minute, second, month, day, year)
*/

// hour, minute, second, month, day, year
$customDate = mktime(10, 30, 0, 12, 25, 2026);

echo "Custom Date : ";
echo date("d-m-Y h:i:s A", $customDate);

echo "<hr>";


// --------------------------------------------------
// 4. strtotime() Function
// --------------------------------------------------
// Converts string date into timestamp
// --------------------------------------------------

echo "<h2>4. strtotime() Function</h2>";

// Add 7 days to current date
$futureDate = strtotime("+7 days");

echo "Date After 7 Days : ";
echo date("d-m-Y", $futureDate);

echo "<br>";

// Find next Sunday
$nextSunday = strtotime("next Sunday");

echo "Next Sunday : ";
echo date("d-m-Y", $nextSunday);

echo "<hr>";


// --------------------------------------------------
// 5. getdate() Function
// --------------------------------------------------
// Returns complete date information in array format
// --------------------------------------------------

echo "<h2>5. getdate() Function</h2>";

$dateInfo = getdate();


// Display complete array
echo "<h3>Complete Array Returned by getdate()</h3>";

echo "<pre>";
print_r($dateInfo);
echo "</pre>";


// Explanation of getdate() values
echo "<h3>Explanation of getdate() Output</h3>";

echo "seconds = Current seconds<br>";
echo "minutes = Current minutes<br>";
echo "hours = Current hour<br>";
echo "mday = Day of month<br>";
echo "wday = Day number of week<br>";
echo "mon = Month number<br>";
echo "year = Current year<br>";
echo "yday = Day number in year<br>";
echo "weekday = Full weekday name<br>";
echo "month = Full month name<br>";
echo "0 = Unix Timestamp<br>";

echo "<br>";


// Accessing individual values
echo "<h3>Accessing Individual Values</h3>";

echo "Current Year : " . $dateInfo['year'];

echo "<br>";

echo "Current Month : " . $dateInfo['month'];

echo "<br>";

echo "Current Day : " . $dateInfo['weekday'];

echo "<br>";

echo "Current Hour : " . $dateInfo['hours'];

echo "<hr>";


// --------------------------------------------------
// 6. Extracting Individual Date Parts
// --------------------------------------------------

echo "<h2>6. Extracting Individual Date Parts</h2>";

echo "Current Year : " . date("Y");

echo "<br>";

echo "Current Month : " . date("F");

echo "<br>";

echo "Current Day : " . date("l");

echo "<hr>";


// --------------------------------------------------
// 7. Difference Between Two Dates
// --------------------------------------------------

echo "<h2>7. Date Difference</h2>";

$date1 = strtotime("2026-01-01");
$date2 = strtotime("2026-12-31");

// Difference in seconds
$diff = $date2 - $date1;

// Convert seconds into days
$days = $diff / (60 * 60 * 24);

echo "Difference Between Dates : " . $days . " Days";

echo "<hr>";


// --------------------------------------------------
// 8. Display Current Date and Time Together
// --------------------------------------------------

echo "<h2>8. Current Date and Time</h2>";

echo date("d-m-Y h:i:s A");

echo "<hr>";


// --------------------------------------------------
// End of Program
// --------------------------------------------------

echo "<h2>Program Completed Successfully</h2>";

?>