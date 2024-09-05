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
            button{
                border:10px solid rgb(142, 6, 152);
                border-radius:30px; 
                background-color:rgb(26, 255, 0);
                color:maroon; 
                font-family:'Lucida Calligraphy';
                font-weight:bold;
                font-size:35px;
                padding:25px;
                margin:15px;
            }
        </style>
    </head> 
    <body>
        <div> 
            <br><br><br><br><br><br>
            <b>
                <?php 
                    session_start(); 
                    if (session_id()==' '||!isset($_SESSION['login'])) 
                    { 
                        ?> 
                        <a href="/mini project/login.php"><button>Login</button></a> 
                        <?php 
                    }
                    else if(session_id()==' '||isset($_SESSION['login'])){ 
                        echo "Hi, " . $_SESSION['login']; 
                        ?>
                        <a href="/mini project/page1.html">NEXT</a>
                        <?php
                    }
                    else{
                        ?>
                        <a href="/mini project/logout.php">Logout</a> 
                        <?php 
                    } 
                ?> 
            </b>
        </div> 
    </body> 
</html>