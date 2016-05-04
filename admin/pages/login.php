<?php
session_start();
include_once '../../controller/dbconnect.php';
if(isset($_SESSION['admin'])!="")
{
 header("Location: dashboard.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM admins WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($password))
 {
  $_SESSION['admin'] = $row['id'];
  header("Location: dashboard.php");
 }
 else
 {
  ?>
          <script>alert('Wrong details !! Please try again');</script>
        <?php
 }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Online Music Instrument and Gadget Store</title>
<meta charset="utf-8">
<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="../../assets/css/style.css" type="text/css" />
</head>
<body id="top" class="bgded fixed" style="background-image:url('../../images/demo/backgrounds/1.png');">
<div class="wrapper row3">
  <main id="container" class="clear"> 
    <h3>Login as Admin</h3>
    <center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Login</button></td>
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