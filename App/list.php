<?php
session_name("VisuRank");
session_start(); // Starts the PHP session
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
            <p id='list-title' class='mb-3 h2 text-center fw-bold'>List of the something-est X of all time</p>

            <p id='list-description' class='mb-2 h5 text-center'>This is a description of the list, describing what the list is about. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut semper nisl sit amet molestie vulputate.</p>

            <hr style='width:50%; color: grey; margin: 20px auto;'>

            <div id='table-container'>
                <table class='table table-striped table-hover'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item</th>
                            <th>Value (unit)</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example row -->
                        <tr>
                            <td>#1</td>
                            <td>First Place</td>
                            <td>100</td>
                            <td>This is an example description of the item.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>