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
            <br><br><br><br><br><br><br>
            <?php
                $link=mysqli_connect("localhost","root","","minipro");
                if($link===false){
                    die("ERROR: Could not connect.".mysqli_connect_error());
                }
                $sql="SELECT COUNT(answer) AS total FROM quiz where answer='Yes'";
                $result=mysqli_query($link,$sql);
                $data=mysqli_fetch_assoc($result);
                $num=$data['total'];
                if(mysqli_query($link,$sql)){
                    if($num<=2){
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result1.html'><button>Next</button></a>";
                    }
                    elseif($num>2 && $num<=4){
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result2.html'><button>Next</button></a>";
                    }
                    elseif($num>4 && $num<=6){
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result3.html'><button>Next</button></a>";
                    }
                    elseif($num>6 && $num<=8){
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result4.html'><button>Next</button></a>";
                    }
                    elseif($num>8 && $num<=10){
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result5.html'><button>Next</button></a>";
                    }  
                    elseif($num>10 && $num<=12){
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result6.html'><button>Next</button></a>";
                    }
                    elseif($num>12 && $num<=14){
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result7.html'><button>Next</button></a>";
                    }
                    elseif($num==15){
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result8.html'><button>Next</button></a>";
                    }
                    else{
                        echo $num."<br>";
                        echo "<b>Click NEXT</b><br><br>";
                        echo "<a href='http://localhost/mini%20project/result9.html'><button>Next</button></a>";
                    }
                }
                else{
                    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
                }
                mysqli_close($link);
            ?>
            <br><br><br><br>
        </div>
    </body>
</html>