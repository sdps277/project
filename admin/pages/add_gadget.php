<?php
session_start();
include_once '../../controller/dbconnect.php';

if(!isset($_SESSION['admin']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM admins WHERE id=".$_SESSION['admin']);
$userRow=mysql_fetch_array($res);
?>
<?php 
include("../../controller/dbconnect.php");
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image_name = $_FILES['image']['name'];
  $image_type = $_FILES['image']['type'];
  $image_size = $_FILES['image']['size'];
  $image_tmp  = $_FILES['image']['tmp_name'];
   move_uploaded_file($image_tmp,"../../images/$image_name"); 
    $query= "insert into gadget(name,price,image) 
      values('$name','$price','$image_name')";
    if(mysql_query($query)){
  
 header("Location: gadget_list.php"); 
 echo "<script>alert('Gadget has been added succesfully !!');</script>"; 
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
<div class="wrapper row0">
  <header id="header" class="clear"> 
        <div id="logo">
      <h3>Online Musical Instrument and Gadget Store</h3>
      
    </div>
      </header>
</div>
<div class="wrapper row1">
  <nav id="mainav" class="clear"> 
     <ul class="clear">    
       <li><a href="dashboard.php">Dashboard</a></li>
       <li><a href="guitar_list.php">Guitar</a></li>
      <li><a href="gadget_list.php">Gadget</a></li>
      <li><a class="drop">Users</a>
        <ul>
          <li><a href="add_user.php">Add User</a></li>
          <li><a href="user_list.php">Manage Users</a></li>
        </ul>
      </li>
             <li><a href="logout.php?logout">Logout</a></li>   
      </ul>
      </nav>
</div>
<div class="wrapper row3">
  <main id="container" class="clear"> 
    <h3>Add Gadget</h3>
    <center>
<div id="add_guitar">
<form method="post" action="" enctype="multipart/form-data">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="name" placeholder="Name" required /></td>
</tr>
<tr>
<td><input type ="text" name="price" placeholder="Price in Dollars" required /></td>
</tr>
<tr>
<td> 
<input type="File" name="image" required></td>
</tr>
<tr>
<td><button type="Submit" name="submit">Add</button></td>
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
                  </li>
        <li class="clear">
          <p class="nospace push15">Invaluable gadgets and acessories at your repository.</p>
                  </li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Brands and Models</h6>
      <ul class="nospace clear ftgal">
        <li class="one_third first"><a href="#"><img src="../../images/demo/4.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../../images/demo/2.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../../images/demo/3.jpg" alt=""></a></li>
        <li class="one_third first"><a href="#"><img src="../../images/demo/11.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../../images/demo/8.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="../../images/demo/9.jpg" alt=""></a></li>
        <li><a href="#"><img src="../../images/demo/a.jpg" alt=""></a></li>
         </ul>
    </div>    
  </footer>
</div><div class="wrapper row5">
  <div id="copyright" class="clear"> 
        <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - Sudip Rai</p>
      </div>
</div>
</body>
</html>
