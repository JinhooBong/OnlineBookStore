<html>
    <head>
        <title>Online Book Store</title>
    </head>
    <body>
        <h3>You have registered successfully!</h3>
        <h4>Here is your information:</h4>
        <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "BOOK_STORE";
        
            $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname) or die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
        
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            echo "Name: &nbsp;&nbsp;&nbsp;&nbsp;$fname $lname<br>";
            $address = $_POST["address"];
            echo "Address: &nbsp;&nbsp;&nbsp;&nbsp;$address<br>";
            $city = $_POST["city"];
            $state = $_POST["state"];
            $zip = $_POST["zip"];   
            echo "City: &nbsp;&nbsp;&nbsp;&nbsp;$city, $state $zip<br>";
            $phoneNum = $_POST["pnumber"];
            echo "Phone: &nbsp;&nbsp;&nbsp;&nbsp;$phoneNum<br>";
            $email = $_POST["email"];
            echo "Email: &nbsp;&nbsp;&nbsp;&nbsp;$email<br>";
            $userId = $_POST["username"];
            echo "Username: &nbsp;&nbsp;&nbsp;&nbsp;$userId<br>";
            $password = $_POST["password"];
            echo "Password: &nbsp;&nbsp;&nbsp;&nbsp;$password<br>";
            $creditType = $_POST["creditType"];
            echo "Creditcard Type: &nbsp;&nbsp;&nbsp;&nbsp;$creditType<br>";
            $creditNum = $_POST["creditNum"];
            echo "Creditcard Number: &nbsp;&nbsp;&nbsp;&nbsp;$creditNum<br>";
            
            $query = "INSERT INTO MEMBERS (fname, lname, address, city, state, zip, phone, email, userid, memberPW, creditcardType, creditcardnumber)
                        VALUES
                            ('$fname', '$lname', '$address', '$city', '$state', '$zip', '$phoneNum', '$email', '$userId', '$password', '$creditType', '$creditNum')";
                            
            $result = mysqli_query($conn, $query);
//            if($result === TRUE)
//            {
//                echo "success";
//            }
//            else 
//            {
//                echo ("error: " .  mysqli_error($conn));
//            }
//        
            mysqli_close($conn);
        ?>
        <br>
        <br>
        <style>
            .button {
                display: inline-block;
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 12px;
                padding: 0.5%;
                width: 10%;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }
            
            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
        </style>
        <!-- return back to search page -->
        <a href="home.php"><button class="button"><span>Go back home</span></button></a>
    </body>
</html>