<?php
session_start();
if(isset($_SESSION['admin'])!="")
{
 header("Location: dashboard.php");
}
include_once '../../controller/dbconnect.php';
if(isset($_POST['btn-signup']))
{
 $name = mysql_real_escape_string($_POST['name']);
 $password = md5(mysql_real_escape_string($_POST['password']));
 $email = mysql_real_escape_string($_POST['email']);
 $address = mysql_real_escape_string($_POST['address']);
 
 if(mysql_query("INSERT INTO admins(name,password,email,address) VALUES('$name','$password','$email','$address')"))
 {
  header("Refresh: 0");
  ?>
        <script>alert('Successfully registered. !! You can now login');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('Error while registering your details...');</script>
        <?php
 }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Online Music Instrument and Gadget Store</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
</head>
<body id="top" class="bgded fixed" style="background-image:url('../images/demo/backgrounds/1.png');">
<div class="wrapper row3">
  <main id="container" class="clear"> 
    <h3>Signup as Admin</h3>
    <center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="name" placeholder="Name" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="address" name="address" placeholder="Your Address" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
</tr>
</table>
</form>
</div>
</center>
    <div class="clear"></div>
  </main>
</div>
</body>
</html>
