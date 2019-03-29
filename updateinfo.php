<?php 
    

    $con = mysql_connect("localhost","root","");
        if(!$con){
            echo " select to the database";
        }
        $db = mysql_select_db("resdb",$con);
        if(!$db){
            echo " connect the database";
        }

    if(isset($_POST['btn1'])){
        $trno = $_POST["trno"];
        $tname = $_POST["tname"];
        
        $row= mysql_query("SELECT * FROM train_info WHERE train_no='$trno' AND train_name='$tname'");
        $st_row=mysql_fetch_array($row);
    }
?>
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
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="admin.html"><span>Add Info</span></a></li>
          <li><a href="updateinfo.php"><span>Update Info</span></a></li>
          <li><a href="deleteinfo.php"><span>Delete Info</span></a></li>
          <li><a href="member.php"><span>Passenger</span></a></li>
          <li><a href="lout2.php"><span>Log Out</span></a></li>
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
          <h2><span>Update Information</span></h2>
          <hr class="w1" align="left" width="90%" size="5" noshade="noshade"/>
          <div class="clr"></div>
          <form method="POST" target="_self">
      <pre>
       Train No :             <input type="text" name="trno" size="25"><br>
       Name of Train :        <input type="text" name="tname" size="25"><br>
                      <input type="Submit" name="btn1" value="Search">
       </pre>
          </form>
    </div>
        <div class="article">
          <h2><span>Save Up</span></h2>
          <hr class="w1" align="left" width="90%" size="5" noshade="noshade"/>
          <div class="clr"></div>
          <form method="POST" target="_self">
      <pre>
       Train No :             <input type="text" name="trno" size="25" value="<?php echo $st_row['train_no'] ?>"/><br>
       Name of Train :        <input type="text" name="tname" size="25" value="<?php echo $st_row['train_name'] ?>"/><br>
       Starting Station :     <input type="text" name="sstation" size="25" value="<?php echo $st_row['s_station'] ?>"/><br>
       Starting Time :        <input type="text" name="stime" size="25" value="<?php echo $st_row['s_time'] ?>"/><br>
       Arrival Station :      <input type="text" name="astation" size="25" value="<?php echo $st_row['a_station'] ?>"/><br>
       Arrival Time :         <input type="text" name="atime" size="25" value="<?php echo $st_row['a_time'] ?>"/><br>
       Ticket Price Shulov :  <input type="text" name="pshulov" size="25" value="<?php echo $st_row['p_shulov'] ?>"/><br>
       Available set(shulov): <input type="text" name="sshulov" size="25" value="<?php echo $st_row['set_shulov']?>"/><br>
       Ticket Price shovan :  <input type="text" name="pshuvon" size="25" value="<?php echo $st_row['p_shuvon']?>"/><br>
       Available set(shovan) :<input type="text" name="sshuvon" size="25" value="<?php echo $st_row['set_shuvon']?>"/><br>
       Ticket Price Chair :   <input type="text" name="pchair" size="25" value="<?php echo $st_row['p_chair']?>"/><br>
       Available set(chair):  <input type="text" name="schair" size="25" value="<?php echo $st_row['set_chair']?>"/><br>
       Ticket Price AC :      <input type="text" name="pac" size="25" value="<?php echo $st_row['p_ac']?>"/><br>
       Available set(AC) :    <input type="text" name="sac" size="25" value="<?php echo $st_row['set_ac']?>"/><br>
                      <input type="Submit" name="btn2" value="Update">
       </pre>
          </form>
      <?php 
    
    $con = mysql_connect("localhost","root","");
        if(!$con){
            echo " select to the database";
        }
        $db = mysql_select_db("resdb",$con);
        if(!$db){
            echo " connect the database";
        }

    if(isset($_POST['btn2'])){
        $trno = $_POST["trno"];
        $tname = $_POST["tname"];
        $sstation = $_POST["sstation"];
        $stime = $_POST["stime"];
        $astation = $_POST["astation"];
        $atime = $_POST["atime"];
        $pshulov = $_POST["pshulov"];
        $sshulov = $_POST["sshulov"];
        $pshuvon = $_POST["pshuvon"];
        $sshuvon = $_POST["sshuvon"];
        $pchair = $_POST["pchair"];
        $schair = $_POST["schair"];
        $pac = $_POST["pac"];
        $sac = $_POST["sac"];
        
        $q = mysql_query("UPDATE train_info SET train_no='$trno',train_name='$tname',s_station='$sstation',s_time='$stime',a_station='$astation',a_time='$atime',p_shulov='$pshulov',set_shulov='$sshulov',p_shuvon='$pshuvon',set_shuvon='$sshuvon',p_chair='$pchair',set_chair='$schair',p_ac='$pac',set_ac='$sac' WHERE train_no='$trno'");
        if($q){
            echo" Data Update successfully";
        }
    }
?>
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
