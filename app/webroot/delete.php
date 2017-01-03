<?php
include("config.php");



if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry

$result = mysqli_query($db,"DELETE FROM users WHERE id=$id")

or die(mysql_error());



// redirect back to the view page

header("Location: adminhome.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: adminhome.php");

}



?>