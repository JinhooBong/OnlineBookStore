<html>
    <head>
        <title>Online Book Store</title>
    </head>
    <body>
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
            <h2>Thank you for shopping at our online book store!</h2>
            <h4>If you wish to shop for more books, you can go back to our homepage.</h4>
            <a href="home.php"><button class="button"><span>Go Home</span></button></a>
        </center>
    </body>
</html>