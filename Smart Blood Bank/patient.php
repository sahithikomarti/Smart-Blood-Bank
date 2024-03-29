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
            <form action="patientdb" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="Fullname"  required/>
                    </div>
                    <div class="input-box">
                        <span class="details">Requirement</span>
                        <select id="Group" name="Group">
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B+</option>
                          <option value="AB">AB+</option>
                          <option value="AB-">AB-</option>
                          <option value="Platelets">Platelets</option>
                          <option value="Plasma">Plasma</option>
                        </select>
                    </div>

                    <div class="input-box">

                        <span class="details">No.of units required</span>
                        <input type="text" placeholder="Enter no.of units required" name="no" required/>
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
            <span class="gender" value="male">Male</span>
          </label>
                        <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" value="female">Female</span>
          </label>
                        <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender" value="Non">Prefer not to say</span>
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