<?php
?>
<html>

<head>
    <meta charset="UTF-6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="report.css">
</head>

<body>
    <div class="results">
        <form class="vehicle_stock">
            <h1>VEHICLE STOCK RESULTS</h1>
            <?php
            //CREATE THE HTML TABLE
            //
            //Fetch the contents of the JSON file
            $array_data = file_get_contents("stock_results.json");
            //
            //Decode the data into associative arrays
            $string_data = json_decode($array_data, TRUE);
            //
            //Obtain the array's values in the reverse order
            $values =  array_reverse(array_values($string_data));
            //
            //Access the records in their reverse order
            //$table_data = array_reverse($values, false);
            //
            //Open a html table
            $table = "<table>";
            //
            //Define the column headings of the table
            $table .= "<tr><th> Time of the Day</th>";
            $table .= "<th> Date</th>";
            $table .= "<th>Date|time</th>";
            $table .= "<th>Registration Number</th></tr>";
            //
            //Generate the rows and columns
            for ($record = 0; $record < sizeof($values); $record++) {
                $table .= "<tr>";
                $table .= "<td>" . $values[$record][0] . "</td>";
                $table .= "<td>" . $values[$record][1] . "</td>";
                $table .= "<td>" . $values[$record][2] . "</td>";
                $table .= "<td>" . $values[$record][3] . "</td>";
                $table .= "</tr>";
            }
            //
            //Close the table
            $table .= "</table>";
            //
            //return the contents of the table
            echo $table;
            ?>
        </form>
    </div>
    <div class="flow">
        <form class="vehicle_flow">
            <h1>VEHICLE FLOW RESULTS</h1>
            <?php
            //CREATE THE HTML TABLE
            //
            //Fetch the contents of the JSON file
            $array_data = file_get_contents("vehicle_flow_result.json");
            //
            //Decode the data into associative arrays
            $string_data = json_decode($array_data, TRUE);
            //
            //Obtain the array's values in the reverse order
            $values =  array_reverse(array_values($string_data));
            //
            //Access the records in their reverse order
            //$table_data = array_reverse($values, false);
            //
            //Open a html table
            $table = "<table>";
            //
            //Define the column headings of the table
            $table .= "<tr><th> Car Registration</th>";
            $table .= "<th> Flow</th>";
            $table .= "<th>Date</th>";
            $table .= "<th>Time</th></tr>";
            //
            //Generate the rows and columns
            for ($record = 0; $record < sizeof($values); $record++) {
                $table .= "<tr>";
                $table .= "<td>" . $values[$record][0] . "</td>";
                $table .= "<td>" . $values[$record][1] . "</td>";
                $table .= "<td>" . $values[$record][2] . "</td>";
                $table .= "<td>" . $values[$record][3] . "</td>";
                $table .= "</tr>";
            }
            //
            //Close the table
            $table .= "</table>";
            //
            //return the contents of the table
            echo $table;
            ?>
        </form>
    </div>
</body>

</html>