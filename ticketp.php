<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <style>
    table,th,td{
      border:2px solid black;
      font-size:16px;
      text-align:center;
      color: black;
      border-radius:10px;
      width:80%;
    }
    tr:hover{background-color:;}
    </style>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="home.html"><span>Home Page</span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="timesh.php"><span>Time Shedule</span></a></li>
          <li class="active"><a href="ticketp.php"><span>Ticket Price</span></a></li>
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
          <h2><span>Ticket Price & Set Ableablety</span></h2>
          <hr  class="w1" align="left" width="90%" size="5" noshade="noshade"/>
          <div class="clr"></div>
          <br>
          <br>
     <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM train_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Train No</th><th>Starting Station</th><th>Arrival Station</th><th> Price Shulov </th><th>Available Set(Shulov)</th><th> Price Shovan </th><th>Available Set(shovan)</th><th> Price Chair </th><th>Available Set(Chair)</th><th> Price AC </th><th>Available Set(AC)</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<center><tr><td>".$row["train_no"]."</td><td>".$row["s_station"]."</td><td>".$row["a_station"]."</td><td> ".$row["p_shulov"]."</td><td> ".$row["set_shulov"]."</td><td> ".$row["p_shuvon"]."</td><td> ".$row["set_shuvon"]."</td><td> ".$row["p_chair"]."</td><td> ".$row["set_chair"]."</td><td> ".$row["p_ac"]."</td><td> ".$row["set_ac"]."</td></tr></center>";
    }
    echo "</table>  ";

} else {
    echo "0 results";
}
$conn->close();
  
    ?>
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
            <li><a href="signin.html">Login</a></li>
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
