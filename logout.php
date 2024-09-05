<html> 
    <head>
        <style>
            body{
                background-color: rgb(246, 175, 237);
                text-align: center;
                font-family: 'Lucida Calligraphy';
                font-size: 35px;
                font-weight: bold;
                color:rgb(0, 0, 0);
            }
            div{
                display:inline-block;
                float:center;
                background-color:pink;
                width:380px;
                height:880px;
                border: 20px solid rgb(212, 237, 233);
                padding: 50px;
                margin: 20px
            }
        </style>
    </head>
    <body>
        <div>
            <b> 
                <?php 
                    session_start(); 
                    setcookie(session_name(), "", time() - 3600); 
                    session_destroy(); 
                    session_write_close(); 
                    header('Location: /mini project/index.php'); 
                ?> 
            </b>
        </div> 
    </body> 
</html>