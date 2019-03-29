<?php 
    

    $con = mysql_connect("localhost","root","");
        if(!$con){
            echo " select to the database";
        }
        $db = mysql_select_db("resdb",$con);
        if(!$db){
            echo " connect the database";
        }

    if(isset($_POST['send'])){
        $remail = $_POST["remail"];
        $query = $_POST["comment"];
        
        $q = mysql_query("insert into query(email,query) values('$remail','$query')");
        if($q){
            echo"ssssssssssssssss";
        }
    }
?>