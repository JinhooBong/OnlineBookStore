<html>
    <head>
        <title>Online Book Store</title>
    </head>
    <body>
        <h2>Welcome New Member!</h2>
        <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "BOOK_STORE";
            
            $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname) or die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
        ?>
        <style>
            .form {
                width: 12.5%;
                padding: 5px 10px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
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
        <form method="post" action=memberInfoPage.php>  
            <div style="text-align: left;">
            <label for="fname">Please enter your first name:</label> 
            <input class="form" name="fname">
            <br>

            <label for="lname">Please enter your last name:</label> 
            <input class="form" name="lname">
            <br>    

            <label for="address">Please enter your current address:</label> 
            <input class="form" name="address">
            <br>  

            <label for="city">Please enter the city name:</label> 
            <input class="form" name="city">
            <br>  
                  
            <label for="state">Please enter the state:</label> 
            <input class="form" name="state">
            <br>  
                  
            <label for="zip">Please enter your ZIP code:</label> 
            <input class="form" name="zip">
            <br>  
                    
            <label for="pnumber">Please enter a working phone number:</label> 
            <input class="form" name="pnumber">
            <br>  
                    
            <label for="email">Please enter your email:</label> 
            <input class="form" name="email">
            <br>  
                    
            <label for="username">Please create a userID:</label> 
            <input class="form" name="username">
            <br>  
                    
            <label for="password">Please create a password:</label> 
            <input class="form"name="password">
            <br>  
                    
            <label for="creditType">Please indicate your credit card type (i.e. visa, discover, amex, mc):</label> 
            <input class="form" name="creditType">
            <br>  
                  
            <label for="creditNum">Please enter your credit card number:</label> 
            <input class="form" name="creditNum">
            </div>
            <br>

            <button class="button"><span>Submit</span></button>

        </form>
    </body>
</html>