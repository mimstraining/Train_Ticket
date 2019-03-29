<?php session_start(); ?>
<!DOCTYPE html >
<html>
<head>
<title>E-Ticketing</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style3.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-900.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
    <style>
    td{
      border:2px solid black;
      text-align:center;
      font-size:20px; 
      color: black;
      border-radius:10px;
      width:80%;
    }
    tr:hover{background-color}
    </style>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="mbinfo.php"><span>Dashboard</span></a></li>
          <li><a href="troute.html"><span>Train Route</span></a></li>
          <li><a href="tpurchase.html"><span>Purchase Ticket</span></a></li>
          <li><a href="chpass.php"><span>Change Password</span></a></li>
          <li><a href="lout.php"><span>Log Out</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html">Bangladesh<span>&nbsp;Railway</span><small>Online E-Tickteing Service</small></a></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
         <h2><span>Comfirm Your Ticket</span></h2>
          <hr class="w1" align="left" width="90%" size="5" noshade="noshade"/>
          

  <form action="step2.php" method="POST" target="_self">
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
$sql = "SELECT * FROM register,train_info WHERE email ='".$_SESSION['sess_email']."' AND s_station ='".$_SESSION['sess_sstation']."' AND a_station ='".$_SESSION['sess_astation']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<pre>";
        echo "<table><tr><td>User Name :    <input type='text' name='a' size='25' value='".$row['name']."'/></td></tr><tr><td>Phone Number : <input type='text' name='b' size='25' value='".$row['number']."'/></td></tr>";
           echo "<tr><td>Route :        <input type='text' name='c' size='25' value='".$_SESSION['sess_sstation']." - ".$_SESSION['sess_astation']."'/></td></tr><br>";
           echo "<tr><td>Train Name :   <input type='text' name='d' size='25' value='".$row['train_name']."'/></td></tr><br>";
           echo "<tr><td>Date :         <input type='text' name='e' size='25' value='".$_SESSION['sess_date']."'/></td></tr><br>";
           echo "<tr><td>Starting Time :<input type='text' name='f' size='25' value='".$row['s_time']."'/></td></tr><br>";
           echo "<tr><td>Class :        <input type='text' name='g' size='25' value='".$_SESSION['sess_class']."'/></td></tr><br>";
           echo "<tr><td>Number of Pessenger :<input type='text' name='pass' size='5' /></td></tr></center><br>";
}
 echo "</table>";
 echo "</pre>";
} else {
    echo "0 results";
}
$conn->close();
  ?>
  <br>
<input type="Submit" value="Next Step--->" name="next">
</form>
<div class="clr"></div>
    </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <div class="clr"></div>
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
      <p class="rf">Powered by <a target="_self" href="http://www.Google.com/"></a>Google</p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
