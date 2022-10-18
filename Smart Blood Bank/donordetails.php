<?php
include_once('connec.php');
$Fullname = $_POST['Fullname'];
$age = $_POST['age'];
$phonenumber = $_POST['phonenumber'];
$healthissue = $_POST['healthissue'];
$Bgroup = $_POST['Bgroup'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
mysqli_select_db($conn,"test");
$q= "INSERT INTO `donor`(`Fullname`, `age`, `phonenumber`, `healthissue`, `Bgroup`, `email`, `address`, `gender`) VALUES ('$Fullname','$age','$phonenumber','$healthissue','$Bgroup','$email ','$address','$gender')";
$result=mysqli_query($conn,$q) or die("something went wrong".$conn->error);
echo "<script type=\"text/javascript\">alert('Donor Registered Succesfully');window.location.href='afterlogin.php';</script>";
?>