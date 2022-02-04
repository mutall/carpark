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
        <title>vehicle_flow</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        <style>

            p {
                font-size: 30px;
            }
             h3 {
               margin-left: 25%;
               color: teal;
            }
            .frame{
                margin: auto;
                margin-top:0%;
                border: 1px solid black;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 25px;
                width: 40%;
                padding-left: 5%;
            }
            input[type='text'],[type='date']{
                width:35%;
                height:5%;
                background-color:whitesmoke;
                color:black;
                font-size:20px;
                margin-top:2%;
               
            }
            input[type="radio"]{
                margin-right: 2%;
                margin-left: 4%;
            }
            label{
                display: block;
                 margin-top: 2%;
            }

            input[type='submit']{
                width:20%;
                height:40px;
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
                    width: 95%;
                }
                input[type='submit']{
                    width:35%;

                }
            }

        </style>


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
