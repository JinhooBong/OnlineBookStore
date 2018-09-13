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
            echo "<h2>Cart details for: &nbsp;&nbsp; $username</h2>";
                
            $title = $_POST['title'];
            $price = $_POST['price'];  
            $quantity = $_POST['quantity'];
        
            $query = "SELECT isbn FROM BOOKS WHERE title = '$title'";
            $result = mysqli_query($conn, $query);
            $num = mysqli_num_rows($result); 
            if($num == 1)
            {
                $obj = mysqli_fetch_object($result);
                $isbn = $obj->isbn;
            }
            
            $query2 = "INSERT INTO CART (userid, isbn, quantity) 
                        VALUES ('$username','$isbn', '$quantity')";
            $result2 = mysqli_query($conn, $query2);
        
        ?>
        <br>
        <br>
        <br>
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
                <th class="section">Book Title</th>
                <th class="section">Price</th>
                <th class="section">Quantity</th>
            </tr>
            <tr>
                <th><d><?php echo $title; ?></d></th>
                <th><d><?php echo "$$price"; ?></d></th>
                <th><d><?php echo $quantity; ?></d>               
            </tr>
        </table>
        <br>
        <br>
        <br>
        <center>
            <form method="POST" action="orderDet.php">
                <a href="orderDet.php"><button class="button"><span>Proceed to checkout</span></button></a>
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                <input type="hidden" name="isbn" value="<?php echo $isbn; ?>">
                <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
            </form>
        </center>
    </body>
</html>