<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `donor` WHERE CONCAT(`Bgroup`) LIKE '%".$valueToSearch."%'";
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
background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.4)),url("data:image/jpeg;base64,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");
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
    <body style="background-color:#90ee90; color:white;">
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
            <i class="fas fa-bars" onclick="showMenu()"></i>
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