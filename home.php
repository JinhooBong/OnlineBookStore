<html>
    <head>
        <title>Online Book Store</title> 
    </head>
    <body>
        <center><h1>Welcome to the Online Book Store!</h1></center>
        <center><img src="./img/book.png" height=175 width = 400></center>
        <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "BOOK_STORE";

            $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname) or die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
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
            
            .form {
                width: 12.5%;
                padding: 10px 15px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
        </style>
        <center>
            <form method="POST" action=searchCollec.php>
                <label for="username">Enter your username:</label> 
                <input class="form" name="username">
                <br>
                <label for="password">Enter your password:</label>
                <input class="form" name="password" type="password">
                <br>
                <br>
                <a href="searchCollec.php"><button class="button"><span>Enter</span></button></a>
            </form>
            <h4>If you are not a member, click the button to sign up!</h4>
            <a href="registration.php"><button class="button"><span>Register for membership!</span></button></a>
            </center>       
        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>