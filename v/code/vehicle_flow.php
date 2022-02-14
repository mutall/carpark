<?php
//Start the session.
session_start();
//
// Then get the current time.
$datetime = date("Y-m-d H:i:s");
//
//Get curent date.
$date = date('Y-m-d');

//Get the default timezone used by all date/time functions in a script.
date_default_timezone_set('Africa/Nairobi');

?>
<!<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="stock_vehicle flow.css">
        <title>vehicle_flow</title>
       
    </head>
    <body>
       <form class="frame"action="vehicle_flow_results.php" method="post">
           <h3>Vehicle Flow</h3>
             <p> Registration Number</p>
            <input 
                type="text" 
                style="text-transform:uppercase" 
                name="numberplate" 
                placeholder="Number Plate"
                maxlength="7" 
                required="true"/>
            <!-- 
            Vehicle category. -->
            <p>Vehicle Category:</p>
            <label><input type="radio" name="category" value="car"/>Car</label>
            <label><input type="radio"name="category" value="lorry"/>Lorry</label>
            <label><input type="radio"name="category" value="motorcycle"/>Motorcycle</label>
            <!--
            Vehicle flow. -->
            <p>Direction of the vehicle:</p>
            <label><input type="radio" name="flow" value="incoming"/>Incoming </label>
            <label><input type="radio"name="flow" value="outgoing"/>Outgoing</label>

               <input type="hidden" value="<?php echo $datetime; ?>" name="datetime" />
             <input 
                type='text' 
                name="email" 
                value="<?php echo $_SESSION['email']; ?>" 
                hidden='true'/>
            <input type="submit"name="submit" value="submit"/>
        </form>

    </body>
</html>
