<?php
//
//Get the current user's email.
$email = $_REQUEST['email'];
//
//Receive the user's stock taking time.
$daytime = $_REQUEST['daytime'];
//
//Get time stamp.
$datetime = $_REQUEST['datetime'];
//
//Get the car registration number.
$numberplate = $_REQUEST['numberplate'];
// //
//Get the vehicle category.
$category = $_REQUEST['category'];
// //Create a regular expression structure to match how 
// //the form input field should be,.i.e. $ number plate= KBA113C
// $regno = "/\w{3}\d{3}\w/";
//
//Check whether the number plate fits the proper format.
// If it is correct the record is acceptable and...
//if (preg_match_all($regno, $numberplate) !== 1) {
//    //
//    //Define a custom error output for the input field
//    $numberplateError = "Invalid number plate, Review the number plate format entered";
//    //
//    //Show the error to the user as an alert
//   echo "<script type='text/javascript'>alert('$numberplateError')</script>";
//}
//
$filename = "stock_results.json";
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
$details = [$numberplate, $category, $daytime, $datetime, $email];
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
<!DOCTYPE html>
<html>

    <head>
        <title>stock_Results</title>
       <link rel="stylesheet" href="stock_vehicle flow.css">

    </head>

    <body>
        <div class="results">
            <label>
                Time of the day: <?php echo $daytime; ?>
            </label>
            <label>
                Date of stock take: <?php echo $datetime; ?>
            </label>
            <label style="text-transform:uppercase">
                Car reg: <?php echo $numberplate; ?>
            </label>
            <label>
                <?php echo $datetime; ?>
            </label>
            <label>
                <?php echo "Vehicle Type: " . $category; ?>
            </label>

            <a href="stock.php" target="_self"> continue</a>


        </div>

    </body>

</html>