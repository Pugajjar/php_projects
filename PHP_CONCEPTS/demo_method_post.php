<!DOCTYPE html>
<html>
<head>
<title>PHP Form Example</title>

<style>
body{
    font-family: Arial;
    background:#f4f4f4;
}

.container{
    width:400px;
    margin:auto;
    margin-top:50px;
    background:white;
    padding:20px;
    border-radius:10px;
}

input,button{
    width:95%;
    padding:10px;
    margin-top:10px;
}
</style>

</head>

<body>

<div class="container">

<h2>Sample PHP Form</h2>

<form method="post">

<input type="text" name="username" placeholder="Enter Name">

<button type="submit" name="submit">Submit</button>

</form>

<?php

if(isset($_POST['submit'])){

    $name=$_POST['username'];

    echo "<h3>Hello ".$name."</h3>";
}

?>

</div>

</body>
</html>
