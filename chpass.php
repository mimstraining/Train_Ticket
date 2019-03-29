<?php session_start(); ?>
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
        $pswb= $_POST["pswb"];
        
        $q = mysql_query("UPDATE register SET password='$pswb' WHERE email ='".$_SESSION['sess_email']."'");
        if($q){
            echo"";
        }
    }
?>
<!DOCTYPE html >
<html>
<head>
<title>E-Ticketing</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style2.css" rel="stylesheet" type="text/css" />
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
          <h2><span>Change Password</span></h2>
          <hr align="left" width="90%" size="5" noshade="noshade"/>
          <div class="clr"></div>
          <form  action="" method="POST" id="" target="_self">
            <ol>
             <li>
                <label for="password">New Password :</label>
                <input type="password" id="email" name="pswa" class="text" />
              </li>
              <li>
                <label for="password">Re-Enter Password :</label>
                <input type="password"  id="email" name="pswb" class="text" /> 
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
      <p class="rf">Powered by <a target="_blank" href="http://www.Google.com/"></a>Google</p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
