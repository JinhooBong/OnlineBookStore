<html>
    <head>
        <title>Online Book Store</title>
    </head>
    <body>
        <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "BOOK_STORE"; 
        
            $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname) or die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
        
            $username = $_POST['username'];
            $orderNum = $_POST['orderNum'];
        
            echo "<h2>Finalized Invoice for: &nbsp;&nbsp;&nbsp; $username</h2>";
                
            $query = "SELECT address, city, state, zip FROM MEMBERS WHERE userid = '$username'";
            $result = mysqli_query($conn, $query);
            $num = mysqli_num_rows($result); 
            if($num == 1)
            {   
                $obj = mysqli_fetch_object($result);
                $address = $obj->address;
                $city = $obj->city;
                $state = $obj->state;
                $zip = $obj->zip;
            }
            
            $date = date('Y-m-d');        
        
            $query2 = "INSERT INTO ORDERS (userid, orderNum, receivedDate, shippedDate, shipAddress, shipCity, shipState, shipZip)
                        VALUES ('$username', '$orderNum', '$date', NULL, '$address', '$city', '$state', '$zip')";
            $result2 = mysqli_query($conn, $query2);
//            if($result2 === TRUE)
//            {
//                echo "success";
//            }
//            else 
//            {
//                echo ("error: " .  mysqli_error($conn));
//            }
            
            echo "User Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $username<br>";
            echo "Order Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$orderNum<br>";
            echo "Received order on: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . date("m/d/Y") . "<br>";
            echo "Shipped on: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not yet shipped.<br>";
            echo "Shipping address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $address, $city, $state $zip<br>";
        ?>
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
                width: 12%;
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
        <br>
        <br>
        <br>
        <d>If you are ready to finalize the order, please confirm. &nbsp;&nbsp;&nbsp;&nbsp;</d>
        <a href="confirmation.php"><button class="button"><span>Confirm</span></button></a>
    </body>
</html>