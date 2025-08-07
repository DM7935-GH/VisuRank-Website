<?php
session_name("VisuRank");
session_start(); // Starts the PHP session

$listDataJSON = file_get_contents('../tempListData.json');
$listData = json_decode($listDataJSON, true);

$listOrdered = array();

if ($listData != null) {
    // If the JSON file is not empty

    foreach ($listData as $key => $value) {
        $listOrdered[$key] = $listData[$key]["value"];
    }
    unset($key, $value);

    arsort($listOrdered);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel=stylesheet type='text/css' href='../styles.php'>

        <style type="text/css">
            <?php include '../styles.php';?>

            #main {
                width: 80%;
                max-width: 1000px;
            }
        </style>
    </head>

    <body>
        <?php include '../navbar.php';?>

        <div id='main' class='d-flex flex-column'>
            <p id='list-title' class='mb-3 h2 text-center fw-bold'>Largest Empires in History</p>

            <p id='list-description' class='mb-2 h5 text-center'>This is a list of the largest empires throughout world history. Data is taken from Wikipedia, and figures may not be 100% accurate.</p>

            <hr style='width:50%; color: grey; margin: 20px auto;'>

            <div id='table-container'>
                <table class='table table-striped table-hover'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Area (million km^2)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rank = 1;

                        foreach ($listOrdered as $key => $value) {
                            $itemName = $listData[$key]['name'];
                            $itemValue = $listData[$key]['value'];
                            echo "
                            <tr>
                                <td>$rank</td>
                                <td>$itemName</td>
                                <td>$itemValue</td>
                            </tr>
                            ";
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