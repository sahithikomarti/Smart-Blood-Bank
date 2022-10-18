<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(135deg, #000000, #e74c3c);
    }
    .container {
        max-width: 700px;
        width: 100%;
        background-color: white;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(167, 6, 6, 0.15);
    }
    
    .container .title {
        font-size: 50px;
        font-weight: 500;
        position: relative;
    }
    .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }
    
    .container .title::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        background: linear-gradient(135deg, #000000, #e74c3c);
    }
    .user-details .input-box {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }
    .input-box span.details {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }
    .user-details .input-box input {
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
    }
    
    .user-details .input-box input:focus,
    .user-details .input-box input:valid {
        border-color: #e74c3c;
    }

    .button {
        height: 50px;
        margin: 50px 0;
    }
 .button input {
        height: 100%;
        width: 100%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 40px;
        font-weight: 700;
        letter-spacing: 2px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #000000, #e74c3c);
    }
    .button input:hover {
        /* transform: scale(0.99); */
        background: linear-gradient(-135deg, #000000, #e74c3c);
    }
    @media(max-width: 584px) {
        .container {
            max-width: 100%;
        }
     .user-details .input-box {
            margin-bottom: 15px;
            width: 100%;
        }
         .category {
            width: 100%;
        }
        .content form .user-details {
            max-height: 300px;
            overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar {
            width: 5px;
        }
    }
    
    @media(max-width: 459px) {
        .container .content .category {
            flex-direction: column;
        }
    }
    </style>
</head>

<body>
    <div class="container">
    <div class="title">Login</div>
    <div class="content">
        <form action = "validlogin.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" name="email" required>
    </div>
    <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="password" required>
                </div>
                <div class="button">
                        <input type="submit" name="Submit" value="Login">
                </div>
        </form>        
</body>

</html>