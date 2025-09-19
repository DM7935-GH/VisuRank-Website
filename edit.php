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

        <title>Edit Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">
            <?php include 'Protected/styles.php';?>
        </style>
    </head>

    <body>
        <?php include 'Protected/navbar.php';?>

        <div id='main' class='d-flex flex-column'>
            <p id='edit-title' class='mb-3 h2 text-center fw-bold'><?php echo "Editing '", $_SESSION['listTitle'], "'"; ?></p>
        </div>
    </body>
</html>