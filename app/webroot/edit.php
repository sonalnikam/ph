<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php

include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$qual=$_POST['qual'];
$country=$_POST['country'];
$query3=mysqli_query($db,"update users set name='$name',email='$email',password='$password',contact='$contact',qual='$qual',country='$country' where id='$id'");
if($query3)
{
header('location:index1.php');
}
}
$query1 = mysqli_query($db,"SELECT * FROM `users` WHERE id= '$id'");
$query2=mysqli_fetch_array($query1);
?>
<div class="form" style="border: 3px solid; margin-top: 100px;">
<h1><center>Update Details</center></h1>
<form method="post" action="">
<table style=" margin-left: 30px; margin-bottom: 30px;">
<tr>
<td><label>Name</label></td><td><input type="text" name="name" value="<?php echo $query2['name']; ?>" /></td>
</tr>
<tr>
<td><label>Username</label></td><td><input type="text" name="username" value="<?php echo $query2['username']; ?>" disabled /></td>
</tr>
<tr>
<td><label>Email</label></td><td><input type="text" name="email" value="<?php echo $query2['email']; ?>" /></td>
</tr>
<tr>
<td><label>Password</label></td><td><input type="password" name="password" value="<?php echo $query2['password']; ?>" /></td>
</tr>
<tr>
<td><label>Contact</label></td><td><input type="text" name="contact" value="<?php echo $query2['contact']; ?>" /> </td>
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
<tr><td>
<input type="submit" name="submit" value="update" ></td></tr>
</table>
</form>
</div>
<?php
}
?>
</body>
</html>