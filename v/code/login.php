<?php
//
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            form{
                border: 3px solid gainsboro;
                border-radius: 5px;
                margin :auto;
                margin-top: 2%;
                padding:3% 13%;
                width: 50%;
                height: 55vh;
                box-sizing: border-box;
                ;

            }
            label{
                font-size: 20px;

            }
            h2{
                font-size: 30px;
            }
            input[type='email'],[type='password']{
                width: 80%;
                ;
                height: 4vh;
                margin: 2%;
                font-size:20px;
                border:2px solid black;
                padding-bottom: 2%;
            }
            button{
                font-size:30px;
                border:3px solid black;
                height:6vh;
                width:60%;
                padding:2%;
                margin:10%;
                cursor: pointer;
            }
            button[type="submit"]:hover{
                background-color: yellowgreen;
            }
        </style>
    </head>
    <body>

        <h2><center>Login form</center></h2>
        <form action="services.php" method="post" class="item2" >

            <label><b>User's email</b><br>
                <input type="email" name="email" placeholder="Enter email" required><br>
            </label>
            <label><b>Password:</b><br>
                <input type="password" name="psw" placeholder="Password"  required><br>
            </label>

            <button type="submit">Login</button> 
        </form>

    </body>
</html>

