<html> 
    <head>
        <title>Login page</title>
        <style>
            body{
                background-color: rgb(246, 175, 237);
                text-align: center;
                font-family: 'Lucida Calligraphy';
                font-size: 35px;
                font-weight: bold;
                color:rgb(0, 0, 0);
            }
            .input-box{
                position: relative;
                display:inline;
            }
            input{ 
                border:5px solid rgb(15, 13, 13);
                border-radius:15px; 
                background-color:aqua;
                color:maroon;
                font-weight:bold;
                padding:10px;
                margin:5px;
            }
            form{
                font-size: 27px;
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
                border-radius:90px; 
                background-color:rgb(26, 255, 0);
                color:maroon; 
                font-family:'Lucida Calligraphy';
                font-weight:bold;
                font-size:50px;
                padding:40px;
                margin:10px;
            }
        </style>
    </head>
    <body>
        <div> 
            <br><br><br><br><br><br>
            <b>
                <?php
                    session_start();
                    const login = 'vidya'; 
                    const password = '2021506120'; 
                    if (isset($_POST['login']) && isset($_POST['password'])) 
                    { 
                        if ($_POST['login'] === login && $_POST['password'] === password) 
                        { 
                            $_SESSION['login'] = $_POST['login']; 
                            header('Location: /mini project/page1.html'); 
                        }
                        else{ 
                            echo "<script>alert('Wrong login or password');</script>"; 
                            echo "<noscript>Wrong login or password</noscript>"; 
                        } 
                    } 
                ?> 
                <form method="post"> 
                    Login:<br><input type="text" name="login"><br><br> 
                    Password:<br><input type="password" name="password"><br><br> 
                    <a href="file:///C:/xampp/htdocs/mini%20project/page1.html"><button>submit</button></a>
                </form> 
            </b>
        </div> 
    </body> 
</html>