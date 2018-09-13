<html>
    <head>
        <title>Online Book Store</title>
    </head>
    <body>
        <h2>Book's Details:</h2>
        <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "BOOK_STORE";
            $title = $_POST['title'];   
            
            $username = $_POST['username'];
        
            echo "<h4>Signed in as: $username</h4><br<br><br>";
            $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname) or die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
               
            $query = "SELECT * FROM BOOKS WHERE title = '$title'"; 
            $result = mysqli_query($conn, $query);
//            if($result === FALSE)
//            {
//                echo("error: " .  mysqli_error($conn));
//            }
//            else 
//            {
//                echo "done";
//            }
        
            $num = mysqli_num_rows($result); 
            if($num == 1)
            {   
                $obj = mysqli_fetch_object($result);
                $isbn = $obj->isbn;
                $author = $obj->author;
                $title = $obj->title;
                $price = $obj->price;
                $subject = $obj->subject;
                echo "Book Title: &nbsp;&nbsp;&nbsp;&nbsp; $title<br>";
                echo "Author: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$author<br>";
                echo "ISBN: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$isbn<br>";
                echo "Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$price<br>";
                echo "Subject: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$subject<br>";
            }
        
            mysqli_close($conn);
        ?>
        <br>
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
            
            .form {
                width: 5%;
                padding: 5px 10px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
        </style>
        <form method="POST" action="cart.php">
            <d>How many copies would you like to buy? &nbsp;&nbsp;&nbsp;&nbsp;</d><input class="form" type="number" min="0" max="10" name="quantity">
            <br>
            <br>
            <a href="cart.php"><button class="button"><span>Add to cart</span></button></a>
            <input type="hidden" name="username" value="<?php echo $username; ?>">
            <input type="hidden" name="title" value="<?php echo $title; ?>">
            <input type="hidden" name="price" value="<?php echo $price; ?>">
        </form>
        
        <form method="POST" action="searchCollec.php">
            <a href="searchCollec.php"><button class="button"><span>Go back to search</span></button></a>
            <input type="hidden" name="username" value="<?php echo $username; ?>">
        </form>        
    </body>
</html>