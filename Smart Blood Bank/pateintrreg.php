<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Bstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Patient Registration</div>
        <div class="content">
            <form action="register.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="Fullname"  required/>
                    </div>
                    
<div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter password" name="password" required/>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Enter password" name="confirmpassword" required/>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" required/>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your Phone number" name="Phonenumber" value="+91" size="2" >
                        <!-- <input type="text" name="phone" size="10">  -->
                        <!-- <input type="text" placeholder="Enter your Phone number" required> -->
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" placeholder="Enter your address" name="Address" required/>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
                        <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
                        <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</body>

</html>