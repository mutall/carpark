<?php
//
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
            <form class="vehicle">
                <h1>VEHICLE FLOW REPORT</h1>
                <?php
                //CREATE THE HTML TABLE
                //
                //Fetch the contents of the JSON file
                $array_data = file_get_contents("vehicle_flow_result.json");
                //
                //Decode the data into associative arrays
                $string_data = json_decode($array_data);
                //
                //Obtain the array's values in the reverse order
                $rows = array_reverse(array_values($string_data));
                //
                //Open a html table
                $table = "<table>";
                //
                //Define the column headings of the table
                $table .= "<tr><th> Registration Number</th>";
                $table .= "<th> Category</th>";
                $table .= "<th>Flow</th>";
                $table .= "<th>Datetime</th>";
                $table .= "<th>Operator</th></tr>";
                //
                $tr = '';
                //
                //Generate the rows and columns
                foreach ($rows as $row) {
                    //
                    $tr .= "<tr>"; 
                    //
                    foreach ($row as $value) {
                        //
                        $tr .= "<td>$value</td>";
                    }
                    //
                    $tr .= "</tr>";
                }
                //
                $table .= $tr;
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