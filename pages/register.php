<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: dashboard.php");
}
include_once '../controller/dbconnect.php';
if(isset($_POST['btn-signup']))
{
 $name = mysql_real_escape_string($_POST['name']);
 $password = md5(mysql_real_escape_string($_POST['password']));
 $email = mysql_real_escape_string($_POST['email']);
 $address = mysql_real_escape_string($_POST['address']);
 
 if(mysql_query("INSERT INTO users(name,password,email,address) VALUES('$name','$password','$email','$address')"))
 {
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
<div class="wrapper row0">
  <header id="header" class="clear"> 
    <div id="logo">
      <h3><a href="../index.php">Online Musical Instrument and Gadget Store</a></h3>    
    </div>
    </header>
</div>
<div class="wrapper row1">
  <nav id="mainav" class="clear"> 
    <ul class="clear">
      <li><a href="../index.php">Home</a></li>   
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="about.php">About</a></li>
      <li><a class="drop" href="#">Products</a>
        <ul>
          <li><a href="guitar.php">Guitar</a></li>
          <li><a href="gadget.php">Gadget</a></li>
        </ul>
      </li>
      <li><a href="faq.php">FAQ</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="register.php">Signup</a></li>
      <li><a class="drop" href="#">Login</a>
        <ul>
          <li><a href="login.php">Login as User</a></li>
          <li><a href="../admin/pages/login.php">Login as admin</a></li>
        </ul>
      </li>     
    </ul>
     <form action="searchcontroller.php" method="GET">
        <p align="center">Search:<input type="text" name="query" /></p>
      </form>
     </nav>
</div>
<div class="wrapper row3">
  <main id="container" class="clear"> 
    <h3>Signup</h3>
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
<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    <div class="one_third first">
      <h6 class="title">Onmc</h6>
      <address class="push30">
      Store Located at:
      </br>
      Jhamsikhel &amp; <br>
      Koteshwor<br>
      Please feel free to visit us.
      </address>
      <ul class="nospace">
        <li class="push10"><span class="icon-time"></span> Sun. - Fri. 9:00am - 7:00pm</li>
        <li class="push10"><span class="icon-phone"></span> +00 (123) 456 7890</li>
        <li><span class="icon-envelope-alt"></span> sudip277@gmail.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Feeds</h6>
      <ul class="nospace clear">
        <li class="clear push30">        
          <p class="nospace push15">New Guitar Models and Exciting Stuffs.</p>
          <p class="nospace"><a href="about.php">Read more &raquo;</a></p>
        </li>
        <li class="clear">
          <p class="nospace push15">Invaluable gadgets and acessories at your repository.</p>
          <p class="nospace"><a href="about.php">Read more &raquo;</a></p>
        </li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Brands and Models</h6>
      <ul class="nospace clear ftgal">
        <li class="one_third first"><a href="#"><img src="../images/demo/4.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../images/demo/2.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../images/demo/3.jpg" alt=""></a></li>
        <li class="one_third first"><a href="#"><img src="../images/demo/11.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../images/demo/8.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../images/demo/9.jpg" alt=""></a></li>
        <li><a href="#"><img src="../images/demo/a.jpg" alt=""></a></li>
      </ul>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - Sudip Rai</p>
    </div>
</div>
</body>
</html>
