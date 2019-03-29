<?php
                 
 if(isset($_POST["login"])){

if(!empty($_POST['rname']) && !empty($_POST['rpass'])) {
    $name=$_POST['rname'];
    $pass=$_POST['rpass'];

    $con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('resdb') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM admin WHERE name='".$name."' AND password='".$pass."'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbname=$row['name'];
    $dbpassword=$row['password'];
    }

    if($name == $dbname && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_name']=$name;

    /* Redirect browser */
    header("Location:admin.html");
    }
    } else {
    echo "Invalid email or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>