<?php
//include auth.php file on all secure pages
include("auth.php");
include("config.php");
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<!--<link rel="stylesheet" href="style.css" /> -->
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<p style="font-size: 200%; font-weight: bolder; margin-left: 500px;">Welcome <?php echo $_SESSION['username']; ?>!</p>
<p style="margin-left: 20px; float: left; font-size: 150%;"> <a href='add.php'>Add Users</a></p>
 <?php
  $username=$_SESSION['username'] ;
  
$result = mysqli_query($db,"SELECT * FROM `users`");

echo "<br><br><br><br><table border='3'  width='800' cellspacing='8' cellpadding='5' style='border-collapse: collapse; margin-left: 300px;'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Contact</th>
<th>Qualification</th>
<th>Country</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['qual'] . "</td>";
echo "<td>" . $row['country'] . "</td>";

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';


echo "</tr>";
}
echo "</table>";


 ?>
 
 <br
 
 <br>
 <br>
<a style="font-size: 150%; margin-left:600px;" href="logout1.php">Logout</a>
</div>
</body>
</html>