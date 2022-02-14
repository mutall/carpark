<?php
    //
    //Start the session.
    session_start();
    //
    //Get the user email upon loggin in.
    $email = $_REQUEST['email'];
    //
    //Store the email in a session.
   $_SESSION['email'] = $email;
?>
<html>
    <head>
        <title>Available Services</title>
        <style>
            /*make the font size good enough for projection*/
            *{
                font-size: 40px;
            }
            /*Reduce the width of the fieldset to stop occupying the entire page*/
            fieldset{
                width: 60%;
            }
        </style>
    </head>
    <body>
        <fieldset class="services">
            <legend>Available Services</legend>
            <a href="stock.php"target="_self">Take Parking Stock</a><br>
            <a href="vehicle_flow.php" target="_self">Vehicle flow </a>
            <fieldset class="reports">
                <legend>Reports</legend>
                <a href="vehicle_stock_report.php" target="_self">Vehicle Stock Report  </a><br>
                <a href="vehicle_flow_report.php" target="_self">Vehicle Flow Report</a>
            </fieldset>
        </fieldset>

    </body>


</html>