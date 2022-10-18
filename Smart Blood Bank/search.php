<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `donor` WHERE CONCAT(`Bgroup`,`address`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `donor`";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            .nav-links a{
                color: white;
            }
            table,tr,th,td
            {
                border: 1px solid black;
                color: white;
                font-size: 24px;
            }
            button{
                color:white;
                background-color:green;

            }
            button a{
                text-decoration:none;
                color:white;
                font-size: 16px;
            }
.bgig {
height:100vh;
width: 100%;
background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.4)),url("https://media.istockphoto.com/photos/donating-blood-for-transfusions-blood-donation-and-blood-donor-bank-picture-id1171248030?k=20&m=1171248030&s=612x612&w=0&h=Y6oZO-PScjGwDw1XwIsZSP-5Ynyq-vpSWSDUOkxGdGo=");
background-position: center;
background-size: cover;
overflow-x:hidden;
position: relative;
background-repeat: no-repeat;
  background-attachment: fixed;
}
            
        </style>
        <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,300;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body >
<div class="bgig">
<nav>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                  
                    
<li><a href="search.php"><b>SEE DONORS</b></a></li>
                    
<li><a href="searchb.php"><b>SEARCH BY BGROUP</b></a></li>
<li><a href="searcha.php"><b>SEARCH BY ADDRESS</b></a></li>
                    <li><a href="home.php"><b>LOGOUT</b></a></li>
                </ul>
            </div>
            
        </nav>
        <div class=bgig>
        <br>
        <br>
        <br>
        <center>

<form action="" method="post"align="center">
            
            <input type="text" name="valueToSearch" placeholder="Enter Anything To Search" size="30"><br><br>
            <div class=button><input type="submit" name="search" size="30" value="SEARCH"></div><br><br>
            </form>
            <table align = "center">
                <tr>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>Health Group</th>
                    <th>Bgroup</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Fullname'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['phonenumber'];?></td>
                    <td><?php echo $row['healthissue'];?></td>
                    <td><?php echo $row['Bgroup'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['gender'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
    </center>
        </div>
</div>
    </body>
</html>