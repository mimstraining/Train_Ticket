<?php 
    

    $con = mysql_connect("localhost","root","");
        if(!$con){
            echo " select to the database";
        }
        $db = mysql_select_db("resdb",$con);
        if(!$db){
            echo " connect the database";
        }

    if(isset($_POST['btn'])){
        $rname = $_POST["rname"];
        $remail = $_POST["remail"];
        $rpassword = $_POST["rpassword"];
        $raddress = $_POST["raddress"];
        $rnumber = $_POST["rnumber"];
        
        $q = mysql_query("insert into register(name,email,password,address,number) values('$rname','$remail','$rpassword','$raddress','$rnumber')");
        if($q){
            echo"sssssss";
        }
    }
?>
<!DOCTYPE html >
<html>
<head>
<title>E-Ticketing</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-900.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="home.html"><span>Home Page</span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="timesh.php"><span>Time Shedule</span></a></li>
          <li><a href="ticketp.php"><span>Ticket Price</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html">Bangladesh<span>&nbsp;Railway</span><small>Online E-Tickteing Service</small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/8.jpg" width="934" height="307" alt="" /> </a> <a href="#"><img src="images/6.jpg" width="934" height="307" alt="" /> </a> <a href="#"><img src="images/7.jpg" width="934" height="307" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Registration</span></h2>
          <hr  class="w1" align="left" width="90%" size="5" noshade="noshade"/>
          <div class="clr"></div>
          <form method="POST" id="" target="_self">
            <ol>
              <li>
                <label for="name">User Name :</label>
                <input type="text" id="email" name="rname" class="text" />
              </li>
             <li>
                <label for="email">Email Address :</label>
                <input type="text" id="email" name="remail" class="text" />
              </li>
              <li>
                <label for="password">Password :</label>
                <input type="password"  id="email" name="rpassword" class="text" /> 
              </li>
              <li>
                <label for="address">Address :</label>
                <input type="text" id="email" name="raddress" class="text" />
              </li>
             <li>
                <label for="number">Phone Number :</label>
                <input type="text" id="email" name="rnumber" class="text" />
              </li>
              <li>
              <input type="Submit" id="imageField" src="images/submit.gif" value="Submit" name="btn" class="send">
                <div class="clr"></div>
              </li>
            </ol>
          </form>
    </div>
      </div>
      <div class="sidebar">

        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <hr  class="w1" align="left" width="90%" size="5" noshade="noshade"/>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="signin.html#">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="fpass.php">Forget Password</a></li>
            <li><a href="signina.html">Admin</a></li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
             <img src="images/20.jpg" width="75" height="75" alt="" class="gal" /> <img src="images/24.jpg" width="75" height="75" alt="" class="gal" />
        <img src="images/21.jpg" width="75" height="75" alt="" class="gal" /><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" />
        <img src="images/23.jpg" width="75" height="75" alt="" class="gal" /><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" />
        </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
             <p>We have an intimate dining atmosphere that doesn't come at the expense of professional quality. Something unique that reflects the authenticity of what customers truly deserve. Our dining area alone consists of elegant furniture and subtle classy beautifully set tables, special lighting effects and a captivating space for your every convenience.</p>
        <ul class="fbg_ul">
          <li><a href="#">We actually deliver what you simply deserve!</a></li>
          <li><a href="#">We AIM to give you TOTAL SATISFACTION!</a></li>
          <li><a href="#">We are open daily from 10am to 12pm.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p class="contact_info"> <span>Address:</span> Ring Road, Dhaka<br />
          <span>Number:</span>  01866686023 <br />
          <span>FAX:</span> +458-4578<br />
          <span>E-mail:</span> <a href="#">tasnimislamuap35@gmail.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Tasnim Islam</a>. All Rights Reserved</p>
      <p class="rf">Powered by <a target="_blank" href="http://www.Google.com/"></a>Google</p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
