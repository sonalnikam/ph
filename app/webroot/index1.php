<?php
//include auth.php file on all secure pages
include("auth.php");
include("config.php");
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
 <?php
  $username=$_SESSION['username'] ;
  // $query = "SELECT * FROM `users` WHERE username= '$username'";
        // $result = mysqli_query($db,$query);
        // $result = mysqli_query($db,$query) or die(mysql_error());
	// $rows = mysqli_num_rows($result);
        // if($rows==1){
	    // $_SESSION['name'] = $email;
            // // Redirect user to index.php
	  // echo $_SESSION['name'];
		// }
 
$result = mysqli_query($db,"SELECT * FROM `users` WHERE username= '$username'");

echo "<br><br><br><br><table border='3'  width='800' cellspacing='8' cellpadding='5' style='border-collapse: collapse; margin-left: 300px;'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Contact</th>
<th>Qualification</th>
<th>Country</th>
<th>Edit</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['qual'] . "</td>";
echo "<td>" . $row['country'] . "</td>";
echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';



echo "</tr>";
}
echo "</table>";


 ?>
 
 <br>
 <br>
 <br>
<a style="font-size: 150%; margin-left:600px;" href="logout1.php">Logout</a>
</div>
</body>
</html>