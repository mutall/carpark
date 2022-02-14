<?php
//
//Get user's password.
$password = $_REQUEST ['password'];
//
//Repeat user's password.
$password = $_REQUEST ['password'];
//
//Get user's email address.
$email = $_REQUEST ['email'];
//
//Get user's phone number.
$number = $_REQUEST ['number'];
//
//Get user's ID number.
$ID_Number = $_REQUEST ['ID_Number'];
//
//Get user's name.
$name = $_REQUEST ['name'];
//
//
$filename = "register_results .json";
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
$details = [$password, $password, $email, $number, $ID_Number, $name,];
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
        <title>register_Results</title>
        <link rel="stylesheet" href="register_results.css"/>
    </head>
    <body>
        <form>
            <label>
                Password:    <?php echo $password; ?>
            </label><br/>
            <label>
                Repeat password: <?php echo $password; ?>
            </label><br/>
            <label>
                Email address: <?php echo $email; ?>
            </label><br/>
            <label>
                Phone number:    <?php echo $number; ?>
            </label><br/>
            <label>
                ID_number:    <?php echo $ID_Number; ?>
            </label><br/>
            <label>
                Name:    <?php echo $name; ?>
            </label><br/>
            <div class="a">
                <a href="register.php" target="_blank"/> continue
            </div>
        </form>
    </body>
</html>