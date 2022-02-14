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
        <style>
            *{
                font-size:30px;
            }
            label{
                display:block
            }
            
            form{
                width:50%;
                margin-left:25%;
            }
            
            fieldset{
                width:60%;
                margin-top:5%;
                line-height:1.5;
            }
            input[type='submit']{
                position:absolute;
                top:50%;
                left:60%;
            }
            
        </style> 
    </head>

    <body>

        <form class="frame" action="stock_results.php" method="post">  <!--Car registration details. -->
            <h3>Vehicle Stock</h3>
            <label>Car Registration Number:
                <input 
                    type="text" 
                    style="text-transform:uppercase" name="numberplate" maxlength="7"
                    pattern="\w{3}\d{3}\w" title="Use this format instead KBZ999Z" 
                    required />
            </label>
            <!-- 
            pattern="\w{3}\d{3}\w" title="Use this format instead KBZ999Z"-->
            <fieldset>
                <legend>Vehicle Category:</legend>
                <label><input type="radio" name="category" value="Car" required />Car</label>
                <label><input type="radio" name="category" value="Lorry" required />Lorry</label>
                <label><input type="radio" name="category" value="Motorcycle" required />Motorcycle</label>
            </fieldset>
            
            <fieldset>   
                <legend>Time of the Day:</legend>
                <label><input type="radio" name="daytime" value="morning" required />Morning</label>
                <label><input type="radio" name="daytime" value="mid_day" required />Mid-day</label>
                <label><input type="radio" name="daytime" value="evening" required />Evening</label>
            </fieldset>
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