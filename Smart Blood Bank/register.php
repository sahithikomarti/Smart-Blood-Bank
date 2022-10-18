
<?php
include_once('connec.php');
$Fullname = $_POST['Fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$gender = $_POST['gender'];
$Phonenumber = $_POST['Phonenumber'];
$Group = $_POST['group'];

$db=mysqli_select_db($conn,"test");
if($db){
    if($password==$confirmpassword){
        $q= "insert into `register` values ('".$Fullname."','".$email."','".$password."','".$confirmpassword."','".$gender."','".$Phonenumber."','".$group."')";
        $result=mysqli_query($conn,$q) or die("something went wrong".$conn->error);
        header("Location:login.php");
    }
    else{
        echo "<script type=\"text/javascript\">alert('newpassword and confirm password are not equal ');window.location.href='register.php';</script>";
        
    }
}
else{
    echo "db not selected".mysqli_error();
}

?>