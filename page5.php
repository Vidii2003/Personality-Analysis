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
                font-size:25px;
                padding:15px;
                margin:5px;
            }
        </style>
    </head>
    <body>
        <div>
        <br><br><br><br><br><br>
            <?php
                $link=mysqli_connect("localhost","root","","minipro");
                if($link===false){
                    die("ERROR: Could not connect.".mysqli_connect_error());
                }
                $sql="UPDATE quiz SET answer='$_POST[3]' where qno='3'";
                if(mysqli_query($link,$sql)){
                    echo "<b>Click NEXT</b>";
                }
                else{
                    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
                }
                mysqli_close($link);
            ?>
            <br><br><br><br>
            <a href="http://localhost/mini%20project/page6.html"><button>Next</button></a>
        </div>
    </body>
</html>