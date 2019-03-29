<?php
                 
 if(isset($_POST["login"])){

if(!empty($_POST['remail']) && !empty($_POST['rpass'])) {
    $email=$_POST['remail'];
    $pass=$_POST['rpass'];

    $con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('resdb') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM register WHERE email='".$email."' AND password='".$pass."'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbemail=$row['email'];
    $dbpassword=$row['password'];
    }

    if($email == $dbemail && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_email']=$email;
    $_SESSION['sess_mID']=$mID;

    /* Redirect browser */
    header("Location: mbinfo.php");
    }
    } else {
    echo "Invalid email or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>