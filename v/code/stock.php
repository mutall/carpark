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
        <link rel="stylesheet" href="stock_vehicle flow.css">
        <title>stock</title>
      
    </head>

    <body>

        <form action="stock_results.php" method="post">  <!--Car registration details. -->
            <h3>Vehicle Stock</h3>
            Car Registration Number:
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