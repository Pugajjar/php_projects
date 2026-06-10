
<?php

// array
// hello 


$student = array(

"name"=>"parthiv",
"age"=>19,
"course"=>"CSE B.Tech"
);

echo $student["name"];
echo"<br>";
echo $student["age"];
echo"<br>";
echo $student["course"];
echo"<br>";


foreach($student as $key => $value){
echo $key.":".$value."<br>";
}

?>