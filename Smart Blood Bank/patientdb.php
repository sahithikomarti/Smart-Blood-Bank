
<?php
include_once('connec.php');
$Fullname = $_POST['Fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phonenumber = $_POST['Phonenumber'];
$group = $_POST['group'];

$db=mysqli_select_db($conn,"test");
if($db){
$q= "insert into `patientt` values ('".$Fullname."','".$email."','".$gender."','".$phonenumber."','".$group."')";
        $result=mysqli_query($conn,$q) or die("something went wrong".$conn->error);
        header("Location:login.php");

    
}
else{
    echo "db not selected".mysqli_error();
}

?>