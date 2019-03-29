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
        $sstation = $_POST["sstation"];
        $date = $_POST["date"];
        $astation = $_POST["astation"];
        $class = $_POST["class"];
    if(!empty($_POST['sstation']) && !empty($_POST['date']) && !empty($_POST['astation']) && !empty($_POST['class']))
     {
            session_start();
        $_SESSION['sess_sstation']=$sstation;
        $_SESSION['sess_date']=$date;
        $_SESSION['sess_astation']=$astation;
        $_SESSION['sess_class']=$class;

    /* Redirect browser */
    header("Location:result.php");
    }
     else {
    echo "All fields are required!";
           }
}
?>