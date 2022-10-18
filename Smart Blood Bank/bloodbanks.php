<! DOCTYPEhtml>
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
        <div class="title">Nearest Blood Bank</div>
        <div class="content">
                 <div class="input-box">
                    <span class="details">State</span>
                        <select name="state" id="state" placeholder="Select State" class="form-control">
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        </select>


                </div>
                 <div class="input-box">
                     <span class="details">City</span> 
                     <input type="text" placeholder="Select City" required>
                </div>
                <div class="button">
                        <input type="submit" value="Search">
            
                </div>
</body>

</html>