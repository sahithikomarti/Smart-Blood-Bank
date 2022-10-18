<?php
include_once('connec.php');
$email= $_POST["email"];
$pwd=$_POST["password"];
mysqli_select_db($conn,"test");
$ql="SELECT * FROM `register` WHERE email= '$email' and password='$pwd'";
$result=mysqli_query($conn,$ql) or die("something went wrong".$conn->error);
$no_of_rows=mysqli_num_rows($result);
if($no_of_rows==0) {
echo "<script type=\"text/javascript\">alert('not a valid user');window.location.href='login.php';</script>";
}
else{
echo "login verification succesfully...";
header("Location:afterlogin.php");
}

?>