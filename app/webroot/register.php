<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body style="">
<?php
include("config.php");
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
		$name = stripslashes($_REQUEST['name']);
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	
	$email = stripslashes($_REQUEST['email']);
	
	$password = stripslashes($_REQUEST['password']);
	$contact = stripslashes($_REQUEST['contact']);
	$qual = stripslashes($_REQUEST['qual']);
	$country = stripslashes($_REQUEST['country']);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (name,username, password, email,contact,qual,country, trn_date)
VALUES ('$name','$username', '$password', '$email','$contact','$qual','$country', '$trn_date')";
        $result = mysqli_query($db,$query);
        if($result){
            echo "<div>
<h1 style='margin-top:300px;'>You are registered successfully.</h1>
<p style=' font-size: 150%;'>Click here to <a href='index.php'>Login</a></p></div>";
        }
    }else{
?>
<div class="form" style="border: 3px solid; margin-top: 100px;">
<h1><center>Registration</center></h1>
<form name="registration" action="" method="post">
<table style=" margin-left: 30px; margin-bottom: 30px;">
<tr>
<td><label> Name  </label></td><td><input type="text" name="name"  required /></td>
</tr>
<tr>
<td><label> User Name  </label></td><td><input type="text" name="username" required /></td>
</tr>
<tr>
<td><label>  Email  </label></td><td><input type="email" name="email" required /></td>
</tr>
<tr>
<td><label> Password  </label></td><td><input type="password" name="password"  required /></td>
</tr>
<tr>
<td><label> Contact No  </label></td><td><input type="text" name="contact" required /></td>
</tr>
<tr>
<td><label> Qualification  </label></td><td><select name="qual" >
  <option value="SSC">SSC</option>
  <option value="HSC">HSC</option>
  <option value="Graduation">Graduation</option>
  <option value="Post-Graduation">Post-Graduation</option>
</select></td>
</tr>
<tr>
<td><label> Country  </label></td><td><select name="country">
  <option value="India">India</option>
  <option value="England">England</option>
  <option value="America">America</option>
  <option value="France">France</option>
</select></td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="Register" /></td>
</tr>
</table>
</form>
</div>
<?php } ?>
</body>
</html>