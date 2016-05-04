<!DOCTYPE html>
<html>
<head>
<title>Online Music Instrument and Gadget Store</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" class="bgded fixed" style="background-image:url('images/demo/backgrounds/1.png');">
<div class="wrapper row0">
  <header id="header" class="clear"> 
    <div id="logo">
      <h3><a href="index.php">Online Musical Instrument and Gadget Store</a></h3>
    </div>
    </header>
</div>
<div class="wrapper row1">
  <nav id="mainav" class="clear"> 
    <ul class="clear">
      <li><a href="index.php">Home</a></li>   
      <li><a href="pages/gallery.php">Gallery</a></li>
      <li><a href="pages/about.php">About</a></li>
      <li><a class="drop" href="#">Products</a>
        <ul>
          <li><a href="pages/guitar.php">Guitar</a></li>
          <li><a href="pages/gadget.php">Gadget</a></li>
        </ul>
      </li>
      <li><a href="pages/faq.php">FAQ</a></li>
      <li><a href="pages/contact.php">Contact</a></li>
      <li><a href="pages/register.php">Signup</a></li>
      <li><a class="drop" href="#">Login</a>
        <ul>
          <li><a href="pages/login.php">Login as User</a></li>
          <li><a href="admin/pages/login.php">Login as admin</a></li>
        </ul>
      </li>
    </ul>
     <form action="pages/searchcontroller.php" method="GET">
        <p align="center">Search:<input type="text" name="query" /></p>   
    </form>
    </nav>
</div>
<div class="wrapper">
  <div id="slider"> 
    <div id="slidewrap">
      <div class="heading"><span id="slidecaption"></span></div>
    </div>
  </div>
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
          <p class="nospace"><a href="pages/about.php">Read more &raquo;</a></p>
        </li>
        <li class="clear"> 
          <p class="nospace push15">Invaluable gadgets and acessories at your repository.</p>
          <p class="nospace"><a href="pages/about.php">Read more &raquo;</a></p>
        </li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Brands and Models</h6>
      <ul class="nospace clear ftgal">
        <li class="one_third first"><a href="#"><img src="images/demo/4.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="images/demo/2.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="images/demo/3.jpg" alt=""></a></li>
        <li class="one_third first"><a href="#"><img src="images/demo/11.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="images/demo/8.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="images/demo/9.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/demo/a.jpg" alt=""></a></li>
      </ul>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - Sudip Rai</p>
  </div>
</div>
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/supersized/supersized.min.js"></script> 
<script>
jQuery(function ($) {
    $.supersized({
        slides: [{
            image: 'images/demo/slider/1.png',
            title: '<span class="heading">LSG Guitar Gadgets</span>Best Sound Quality</a>'
        }, {
            image: 'images/demo/slider/2.png',
            title: '<span class="heading">Ltd 445R White bass edition</span>Signature Pickups</a>'
        }, {
            image: 'images/demo/slider/3.png',
            title: '<span class="heading">Marshall Amplifiers</span>High Tech Sound</a>'
        },
        {
            image: 'images/demo/slider/4.png',
            title: '<span class="heading">Pedal Fusion</span>BOSS Series</a>'
        }]
    });
});
</script>
</body>
</html>