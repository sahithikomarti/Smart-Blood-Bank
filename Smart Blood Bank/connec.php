<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
   die("Connection failed".mysqi_connect_error());
}
echo "connected Succesfully"
?>