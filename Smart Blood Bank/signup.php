<?php
include_once('connec.php');
$Fullname = $_POST['Fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$Phonenumber = $_POST['Phonenumber'];
$confirmpassword = $_POST['confirmpassword'];
mysqli_select_db($conn,"test");
if($password==$confirmpassword){
$q= "INSERT INTO `register`(`Fullname`, `email`, `password`, `gender`, `phonenumber`, `confirmpassword`) VALUES ('$Fullname','$email','$password','$gender','$Phonenumber','$confirmpassword')";
$result=mysqli_query($conn,$q) or die("something went wrong".$conn->error);
header("Location:login.php");
}
else{
    echo "<script type=\"text/javascript\">alert('newpassword and confirm password are not equal ');window.location.href='register.php';</script>";
}
?>