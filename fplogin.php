<?php
                 
 if(isset($_POST["login"])){

if(!empty($_POST['name']) && !empty($_POST['email'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];

    $con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('resdb') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM register WHERE name='".$name."' AND email='".$email."'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbname=$row['name'];
    $dbemail=$row['email'];
    }

    if($name == $dbname && $email == $dbemail)
    {
    session_start();
    $_SESSION['sess_name']=$name;

    /* Redirect browser */
    header("Location: fpset.php");
    }
    } else {
    echo "Invalid email or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>