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
        
        $q = mysql_query("insert into train_info(train_no,train_name,s_station,s_time,a_station,a_time,p_shulov,set_shulov,p_shuvon,set_shuvon,p_chair,set_chair,p_ac,set_ac) values('$trno','$tname','$sstation','$stime','$astation','$atime','$pshulov','$sshulov','$pshuvon','$sshuvon','$pchair','$schair','$pac','$sac')");
        if($q){
            echo"ss";
        }
    }
?>