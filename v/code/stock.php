<?php
//
//Start the session.
session_start();
//
//Get the default timezone used by all date/time functions in a script.
date_default_timezone_set('Africa/Nairobi');
//
//
$datetime = date("Y-m-d H:i:s");
//
//
$date = date("Y-m-d");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>stock</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
            p {
                font-size: 30px;
                margin-top: 3%;
            }
             h3 {
               margin-left: 25%;
               color: teal;
               margin-top: 0px;
            }
            .frame{
                margin: auto;
                border: 1px solid black;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 25px;
                width: 40%;
                padding-left: 5%;
            }
            input[type='text'],[type='date']{
                width:50%;
                background-color:whitesmoke;
                font-size:20px;
                margin-top:3px;
                padding-top:5px;
            }

            input[type='radio']{
                margin-right: 2%;
                margin-left: 4%;

            }
            label{
                display: block;
                margin-top: 2%;
            }
            input[type='submit']{
                width:20%;
                font-size:30px;
                margin-top:10%;
                background-color: silver;
                margin-left: 60%;
                margin-bottom: 2%;
                cursor: pointer;
            }

            input[type='submit']:hover {
                background-color: #3e8e41
            }

            /*
            Style the page for mobile devices. */
            @media screen and (max-width:480px){
                .frame{
                    width: 100%;
                }
                input[type='submit']{
                    width:35%;

                }
                input[type='text'],[type='date']{
                    width:40%;
                } 
            }
        </style> 
    </head>

    <body>

        <form class="frame" action="stock_results.php" method="post">  <!--Car registration details. -->
            <h3>Vehicle Stock</h3>
            <p>Car Registration Number:</p>
            <input 
                type="text" 
                style="text-transform:uppercase" name="numberplate" maxlength="7"
                pattern="\w{3}\d{3}\w" title="Use this format instead KBZ999Z" 
                required />
            <!-- 
            pattern="\w{3}\d{3}\w" title="Use this format instead KBZ999Z"-->
            <p>Vehicle Category:</p>
            <label><input type="radio" name="category" value="Car" required />Car</label>
            <label><input type="radio" name="category" value="Lorry" required />Lorry</label>
            <label><input type="radio" name="category" value="Motorcycle" required />Motorcycle</label>

            <p>Time of the Day:</p>
            <label><input type="radio" name="daytime" value="morning" required />Morning</label>
            <label><input type="radio" name="daytime" value="mid_day" required />Mid-day</label>
            <label><input type="radio" name="daytime" value="evening" required />Evening</label>

            <input type="hidden" value="<?php echo $datetime; ?>" name="datetime" />
            
            <input 
                type='text' 
                name="email" 
                value="<?php echo $_SESSION['email']; ?>" 
                hidden='true'/>
            
            <input type="submit" name="submit" />

        </form>
    </body>

</html>