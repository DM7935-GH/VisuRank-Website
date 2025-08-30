<?php
session_name("VisuRank");
session_start(); // Starts the PHP session

$listDataJSON = file_get_contents('Protected/tempListData.json');
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

$columnNames = array("name"=>"Name", "value"=>"Area (million km^2)", "field1"=>"Year", "field2"=>Null
, "field3"=>Null, "field4"=>Null, "field5"=>Null, "description"=>Null, "thumbnail"=>true);
$listTitle = "Largest Empires in History";
$listDescription = "This is a list of the largest empires throughout world history. The figures given are estimates, and may not be 100% accurate. All data is taken from the Wikipedia article \"List of largest empires\".";
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
            <p id='list-title' class='mb-3 h2 text-center fw-bold'><?php echo $listTitle; ?></p>

            <p id='list-description' class='mb-2 h5 text-center'><?php echo $listDescription; ?></p>

            <hr style='width:50%; color: grey; margin: 20px auto;'>

            <div id='table-container'>
                <table class='table table-striped table-hover'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <?php
                            foreach ($columnNames as $key => $value) {
                                if ($key == "thumbnail" && $value == true) {
                                    echo "<th></th>";
                                } else if ($key == "name" || $key == "value" || $value != null) {
                                    echo "<th>" , $columnNames[$key] , "</th>";
                                }
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rank = 1;

                        foreach ($listOrdered as $listKey => $listValue) {
                            echo "
                            <tr>
                                <td>{$rank}</td>
                                <td>{$listData[$listKey]['name']}</td>
                                <td>{$listData[$listKey]['value']}</td>
                            ";

                            foreach ($columnNames as $columnKey => $coulmnValue) {
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