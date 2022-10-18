<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Bstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Donor Registration</div>
        <div class="content">
            <form action="donordetails.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="Fullname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Choose Blood Group</span>
                        <select id="Group" name="Bgroup">
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B+</option>
                          <option value="AB">AB+</option>
                          <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Age</span>
                        <input type="text" placeholder="Enter your age" name="age" required>
                    </div>
                    <div class="input-box">

                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your phone number" name="phonenumber" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" placeholder="Enter your address" name="address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Any health issues</span>
                        <input type="text" placeholder="If yes, mention your problem " name="healthissue">
                    </div>

                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="m">
                    <input type="radio" name="gender" id="dot-2" value="f"> 
                    <input type="radio" name="gender" id="dot-3" value="o">
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
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>

</body>

</html>