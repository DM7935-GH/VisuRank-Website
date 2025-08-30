<?php
session_name("VisuRank");
session_start(); // Starts the PHP session
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Games Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">
            <?php include 'Protected/styles.php';?>
        </style>
    </head>

    <body>
        <?php include 'Protected/navbar.php';?>

        <h2>List Games</h2>
    </body>
</html>