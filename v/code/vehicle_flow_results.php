<?php
//
//Get the current user's email.
$email = $_REQUEST['email'];
//
//Get client's vehicle number plate.
$numberplate = $_REQUEST['numberplate'];
//
//Select whether the vehicle is incoming or outgoing.
$flow = $_REQUEST['flow'];
//Get the vehicle category
//
$category = $_REQUEST['category'];
//
//Get current time stamp.
$datetime = $_REQUEST['datetime'];
//
//The file that stores collected data.
$filename = "vehicle_flow_result.json";
//
//Stop further processing if the filename does not exist
if (!file_exists($filename)) {
    die("File $filename does not exist");
}

//
//Read its content,
$str = file_get_contents($filename);
//
//Convert the string to a PHP object(array)
$content = json_decode($str);

//
//Compile the details of the car that you have just collected.
$details = [$numberplate, $category, $flow, $datetime, $email];
//
//Add the details to the content.
array_push($content, $details);
//
//Save the file content.
$str2 = json_encode($content);
//
//file_put_contents($filename, $str2);
//
//Open the file, to get a handle, for writing puroses
$handle = fopen($filename, "w");
//
//Use the handle to write the text
fwrite($handle, $str2);
//
//Close the handle
fclose($handle);
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="stock_vehicle flow.css">

    </head>
    <div class='results'>
        <label style="text-transform:uppercase">car reg: <?php echo $numberplate; ?></label>
        <label>Flow: <?php echo $flow; ?></label>
        <label>Category: <?php echo $category; ?></label>
        <label>Date&time: <?php echo $datetime; ?></label>
        
          <a href="vehicle_flow.php" target="_self"> continue</a>
        
    </div>
    <body>

    </body>
</html>

