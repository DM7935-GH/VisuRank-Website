<?php
session_name("VisuRank");
session_start(); // Starts the PHP session

include 'Protected/functions.php';
SetSessionVariables();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">
            <?php include 'Protected/styles.php';?>

            #main {
                width: 80%;
                max-width: 1000px;
            }

            .thumbnail-image {
                height: auto;
                max-width: 5vw !important;
                border-radius: 5px;
            }
        </style>
    </head>

    <body>
        <?php include 'Protected/navbar.php';?>

        <div id='main' class='d-flex flex-column'>
            <p id='list-title' class='mb-3 h2 text-center fw-bold'><?php echo $_SESSION['listTitle']; ?></p>

            <p id='list-description' class='mb-2 h5 text-center'><?php echo $_SESSION['listDescription']; ?></p>

            <hr style='width:50%; color: grey; margin: 20px auto;'>

            <div id='table-container'>
                <table class='table table-striped table-hover'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <?php
                            // This loop generates the list's table headers, based on the column names
                            foreach ($_SESSION['columnNames'] as $key => $value) {
                                if ($key == "thumbnail" && $value == true) {
                                    echo "<th></th>";
                                } else if ($key == "name" || $key == "value" || $value != null) {
                                    echo "<th>" , $_SESSION['columnNames'][$key] , "</th>";
                                }
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rank = 1;

                        // This loop generates the rest of the rows in this list
                        foreach ($listOrdered as $listKey => $listValue) {
                            // Generates the rank, name, and value fields for this row
                            echo "
                            <tr>
                                <td>{$rank}</td>
                                <td>{$listData[$listKey]['name']}</td>
                                <td>{$listData[$listKey]['value']}</td>
                            ";

                            // Generates the other fields for this row, including the thumbnail if it exists
                            foreach ($_SESSION['columnNames'] as $columnKey => $coulmnValue) {
                                if ($columnKey == "thumbnail" && $coulmnValue == true) {
                                    if (array_key_exists('thumbnail',$listData[$listKey])) {
                                        echo "<td><img src='ImageFolder/1/{$listData[$listKey]['thumbnail']}' class='img-fluid mx-auto d-block thumbnail-image'></td>";
                                    } else {
                                        echo "<td></td>";
                                    }
                                } else if ($columnKey != "name" && $columnKey != "value" && $columnKey != "thumbnail" && $coulmnValue != null) {
                                    if (array_key_exists($columnKey,$listData[$listKey])) {
                                        echo "<td>{$listData[$listKey][$columnKey]}</td>";
                                    } else {
                                        echo "<td></td>";
                                    }
                                }
                            }

                            echo "</tr>";
                            $rank++;
                        }

                        unset($key, $value);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>