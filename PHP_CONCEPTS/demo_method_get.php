```php id="getmethoddemo"
<!DOCTYPE html>

<html>

<head>

<title>PHP GET Form Example</title>

<style>

body{
    font-family:Arial;
    background:lightgray;
}

.container{

    width:400px;

    margin:auto;

    margin-top:50px;

    background:white;

    padding:30px;

    border-radius:10px;
}

input,button{

    width:100%;

    padding:10px;

    margin-top:10px;

    box-sizing:border-box;
}

h3{
    color:blue;
}

</style>

</head>

<body>

<div class="container">

<h2>PHP GET Form Example</h2>

<form method="get">

<input type="text"
name="username"
placeholder="Enter Name"
required>

<button type="submit"
name="submit">

SUBMIT

</button>

</form>


<?php

// Check whether form is submitted
if(isset($_GET['submit']))
{
    
    // Get value from GET array
    $name = $_GET['username'];

    
    // Display message
    echo "<h3>Hello " . $name . "</h3>";
}

?>

</div>

</body>

</html>
```
