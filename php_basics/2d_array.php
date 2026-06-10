
<?php

$students = array(
    array("parthiv", 19, "CSE B.Tech"),
    array("rahul", 20, "IT")
);

for($row = 0; $row < count($students); $row++) {
    for($col = 0; $col < count($students[$row]); $col++) {
        echo $students[$row][$col] . " ";
    }
    echo "<br>";
}


?>