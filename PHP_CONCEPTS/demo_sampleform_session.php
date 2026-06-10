
<?php

// Start session
session_start();


// Check whether form is submitted
if(isset($_POST['submit']))
{
    
    // Get input value
    $name = $_POST['username'];

    
    // Store message in session
    $_SESSION['message'] = "Hello " . $name;

    
    // Redirect page to prevent form resubmission
    header("Location:test1.php");

    
    // Stop execution
    exit();
}

?>

<!DOCTYPE html>

<html>

<head>

<title>PHP Form Example</title>

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

<h2>PHP Form Example</h2>

<form method="post">

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

// Display session message once
if(isset($_SESSION['message']))
{
    
    echo "<h3>" . $_SESSION['message'] . "</h3>";

    
    // Remove session message
    unset($_SESSION['message']);
}

?>

</div>

</body>

</html>
```
