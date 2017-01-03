
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
include("config.php");
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	
	$password = stripslashes($_REQUEST['password']);
	
	//Checking is user existing in the database or not
       if($username=='admin' && $password=='admin')
	   {
		   $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: adminhome.php");
         }else{
	echo "<div align='center'>
<h1 style='margin-top: 250px;'>Username/password is incorrect.</h1>
<br/><p style=' font-size: 150%;'>Click here to <a href='admin.php'>Login</a></p></div>";
	}
    }else{
?>
<div class="form" style="border: 3px solid; margin-top: 100px;">
<h1><center>Admin Login </center></h1>
<form action="" method="post" name="login">
<table style=" margin-left: 30px; margin-bottom: 30px;">
<tr>
<td><label> User Name  </label></td><td><input type="text" name="username" placeholder="Username" required /></td>
</tr>
<tr>
<td><label> Password  </label></td><td><input type="password" name="password" placeholder="Password" required /></td>
</tr>
<tr>
<td>
<input name="submit" type="submit" value="Login" /></td>
</tr>
</table>
</form>
</div>
<?php } ?>
</body>
</html>