  <?php
session_start();
include_once '../controller/dbconnect.php';
if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM users WHERE id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<head>
<title>Online Music Instrument and Gadget Store</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>
<body id="top" class="bgded fixed" style="background-image:url('../images/demo/backgrounds/1.png');">
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
            <li><a class="drop" href="#">Products</a>
        <ul>
          <li><a href="guitar_list.php">Guitar</a></li>
          <li><a href="gadget_list.php">Gadget</a></li>
          </ul>        
      <li><a href="logout.php?logout">Logout</a></li>     
    </ul>
     <form action="searchcontroller2.php" method="GET">
        <p align="center">Search:<input type="text" name="query" /></p>
       </form>
     </nav>
</div>
<div class="wrapper row3">
  <main id="container" class="clear"> 
 <h2> <p align="center" > YOUR PROFILE</p></h2>
<h1><p align="center">Email : <?php echo $userRow['email']; ?> </h1>
 <p align="center">Username : <?php echo $userRow['name']; ?></p>
  <p align="center">Address : <?php echo $userRow['address']; ?></p>
    </div>
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
</div><div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - Sudip Rai</p>
      </div>
</div>
</body>
</html>