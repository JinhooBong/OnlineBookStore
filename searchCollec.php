<html>
    <head>
        <title>Online Book Store</title>
    </head>
    
    <?php
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "BOOK_STORE";
        
        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname) or die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
        
        $username = $_POST["username"]; 
        
        echo "<center><h1>Welcome $username !</h1></center>";    
            
        $query = "SELECT * FROM BOOKS";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);
    
        mysqli_close($conn);
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
    </style>
    <center>
        <h4>Select a title from our selection:</h4>
            <form method="POST" action="bookDet.php">
                <select name="title">
                <?php
                    $i=0;
                    while ($i < $num) 
                    {
                        $obj = mysqli_fetch_object($result);
                        $title = $obj->title;
                        echo "<option>", $title, "\n";
                        $i++;
                    }
                ?>      
                </select> 
                    
                <button class="button"><span>Get Book Details</span></button>
                <input type="hidden" name="username" value="<?php echo $username; ?>">
            </form>
    </center>
</html>