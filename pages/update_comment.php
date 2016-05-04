<?php
include("../controller/dbconnect.php");
$edit_id = @$_GET['edit'];
  $query="select * from comment where id='$edit_id' ";
  $run=mysql_query($query);
 while($row=mysql_fetch_array($run)){
  $name = $row['name'];
    $date = $row['date'];
  $comment = $row['comment']; 
  ?>

<?php
include("../controller/dbconnect.php");
if(isset($_POST['submit']))
{ 
  $name = $_POST['name'];
  $date = $_POST['date'];
  $comment=$_POST['comment']; 
  mysql_query("UPDATE comment SET name ='$name', date ='$date',
     comment='$comment' WHERE id = '$edit_id'")
        or die(mysql_error()); 
  header("Location: faq.php");

}
?>

<!DOCTYPE html>

<html>
<head>
<title>Online Music Instrument and Gadget Store</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
    <div id="comments">     
            <h2>Update Comment</h2>
      <form action="#" method="post">
        <div class="one_third first">
          <label for="name">Name <span>*</span></label>
          <input type="text" name="name" id="name" value="" size="22" required>
        </div>
        <div class="one_third">
          <label for="date">Date <span>*</span></label>
          <input type="date" name="date" id="date" value="" size="22" required >
        </div>
        <div class="one_third">
         
        </div>
        <div class="block clear">
          <label for="comment">Your Comment</label>
          <input name="comment" id="comment" cols="65" rows="30" required >
        </div>
         <input name="submit" type="submit" value="Update"> 
      </form>
    </div> <?php }?>
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
</div><div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - Sudip Rai</p>
    </div>
</div>
</body>
</html>