<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 14/03/2016
 * Time: 10:27
 */
include("databse.php");
if(empty($_POST["username"])|| empty($_POST["password"]))
{
    echo "both fields are required";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT uid FROM users WHERE username='$username' and password='$password'";

    $result=mysqli_query($db,$sq1);
    if(mysqli_num_rows($result) == 1)
    {
      header("location: home.php");
    }else{
        echo "incorrect username or password.";

    }
}
?>