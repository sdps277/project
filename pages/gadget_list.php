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
<?php
require("../controller/db.php");
if(isset($_GET['page2'])){
  $pages=array("gadget2","gadget_cart");
  if(in_array($_GET['page2'],$pages)){
    $page2=$_GET['page2'];
  }else{
    $page2="gadget2";
  }
}else{
  $page2="gadget2";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Online Music Instrument and Gadget Store</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>
<body id="top" class="bgded fixed" style="background-image:url('../images/demo/backgrounds/1.png');"><div class="wrapper row0">
  <header id="header" class="clear"> 
    <div id="logo">
      <h3><a href="../index.php">Online Musical Instrument and Gadget Store</a></h3> 
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
   <div class="sidebar one_quarter first"> 
              <nav class="sdb_holder">
        <ul>
          <li><a href="guitar_list.php">Guitar</a></li>
          <li><a href="gadget_list.php">Gadget</a></li>
        </ul></br>  
        Your Gadget Cart is at the bottom. Add items to your gadget cart.
      </nav>
    </div>
 <div id="content" class="three_quarter"> 
        <?php require($page2 . ".php"); ?>
      </div>
      <div id="sidebar">
        <h1>Cart</h1>
        <table size='12'>
          <tr>
              <th>Name</th>
                <th>Quantity</th>
            </tr>
        <?php
        if(isset($_SESSION['gadget_cart'])){
          $sql = "SELECT * FROM gadget WHERE id IN(";
          foreach($_SESSION['gadget_cart'] as $id => $value){
            $sql .=$id. ",";
          }
          $sql=substr($sql,0,-1).") ORDER BY id ASC";
          $query = mysqli_query($con, $sql);
          if(!empty($query)){
            while($row = mysqli_fetch_array($query)){
      ?>
            <tr>
            <td><?php echo $row['name']; ?></td><td><?php echo $_SESSION['gadget_cart'][$row['id']]['quantity']; ?></td>
      </tr>
          <?php
          }
          }else{
      ?>   
          <tr><td colspan="3"><?php echo "<i>Your gadget cart is empty."; ?></td></tr>
            <?php
        }
      ?>   
        <tr><td colspan="3"><a href="gadget_list.php?page2=gadget_cart">Go To Gadget Cart</a></td></tr>
        <?php
        }else{
    ?>
        <tr><td><?php echo "Your Gadget Cart is Empty"; ?></td></tr>
        <?php
        }
    ?>
        </table>
  </div>
 </div>
   <div class="clear">
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
</div>
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - Sudip Rai</p>
  </div>
</div>
</body>
</html>