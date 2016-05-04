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
        <p align="center">Search : <input type="text" name="query" /></p>
         </form>
</nav>
</div>
<div class="wrapper row3">
  <main id="container" class="clear"> 
    <style>
body{}

#frmContact div{margin-bottom: 0px}
#frmContact div label{margin-left: 5px}
.demoInputBox{padding:10px; border:#F0F0F0 1px solid; border-radius:4px;}
.error{background-color: #FF6600;border:#AA4502 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.success{background-color: #12CC1A;border:#0FA015 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.info{font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:green;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
</style>
<script>
function sendContact() {
  var valid;  
  valid = validateContact();
  if(valid) {
    jQuery.ajax({
    url: "../controller/contact_mail.php",
    data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$(content).val(),
    type: "POST",
    success:function(data){
    $("#mail-status").html(data);
    },
    error:function (){}
    });
  }
}

function validateContact() {
  var valid = true; 
  $(".demoInputBox").css('background-color','');
  $(".info").html('');
  
  if(!$("#userName").val()) {
    $("#userName-info").html("(required)");
    $("#userName").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#userEmail").val()) {
    $("#userEmail-info").html("(required)");
    $("#userEmail").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    $("#userEmail-info").html("(invalid)");
    $("#userEmail").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#subject").val()) {
    $("#subject-info").html("(required)");
    $("#subject").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#content").val()) {
    $("#content-info").html("(required)");
    $("#content").css('background-color','#FFFFDF');
    valid = false;
  }
  
  return valid;
}
</script>
<div id="frmContact">
<div id="mail-status"></div>
<div>
<label style="padding-top:5px;">Name</label>
<span id="userName-info" class="info"></span><br/>
<input type="text" name="userName" id="userName" class="demoInputBox">
</div>
<div>
<label>Email</label>
<span id="userEmail-info" class="info"></span><br/>
<input type="text" name="userEmail" id="userEmail" class="demoInputBox">
</div>
<div>
<label>Subject</label> 
<span id="subject-info" class="info"></span><br/>
<input type="text" name="subject" id="subject" class="demoInputBox">
</div>
<div>
<label>Content</label> 
<span id="content-info" class="info"></span><br/>
<textarea name="content" id="content" class="demoInputBox" cols="60" rows="6"></textarea>
</div>
<div>
<button name="submit" class="btnAction" onClick="sendContact();">Send</button>
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