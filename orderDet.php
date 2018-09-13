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
            echo "<h2>Order Details for: $username</h2>";
            
            $num = 1;
            $orderNum = str_pad($num, 6, "0", STR_PAD_LEFT);
        
            $isbn = $_POST['isbn'];
        
            # grab quantity
            $quantity = $_POST['quantity'];
        
            $query = "SELECT price FROM BOOKS WHERE isbn = '$isbn'";
            $result = mysqli_query($conn, $query);
            $num = mysqli_num_rows($result);
            if($num == 1)
            {
                $obj = mysqli_fetch_object($result);
                $price = $obj->price;
            }
        
            $price = $quantity * $price;
            
            $query2 = "INSERT INTO ORDERDETAILS (orderNum, isbn, quantity, price)
                        VALUES ('$orderNum', '$isbn', '$quantity', '$price')";
            $result2 = mysqli_query($conn, $query2);
        ?>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
            }

            tr:nth-child(even) {background-color: #f2f2f2;}
            
            d {
                font-weight: normal;
            }
            
            .button {
                display: inline-block;
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 12px;
                padding: 0.5%;
                width: 14%;
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
            
            .section {
                font-size: 20px;
            }
            
        </style>
        <table style="width:100%;">
            <tr>
                <th class="section">OrderNum</th>
                <th class="section">ISBN</th>
                <th class="section">Quantity</th>
                <th class="section">Price</th>
            </tr>
            <tr>
                <th><d><?php echo $orderNum; ?></d></th>
                <th><d><?php echo $isbn; ?></d></th>
                <th><d><?php echo $quantity; ?></d></th>
                <th><d><?php echo "$$price"; ?></d></th>
                <!-- figure out how to store quantity -->
            </tr>
        </table> 
        
        
        <?php
            $num = $num + 1;    // increment the order number
        ?>
        <br>
        <br>
        <center>
            <form method="POST" action="orders.php">
                <a href="orders.php"><button class="button"><span>Confirm Order Details</span></button></a>
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                <input type="hidden" name="orderNum" value="<?php echo $orderNum; ?>">
            </form>
        </center>
        
    </body>
</html>