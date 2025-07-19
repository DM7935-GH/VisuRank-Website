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
        </style>
    </head>

    <body>
        <?php include '../navbar.php';?>

        <div id="main" class="d-flex flex-column">
            <p class='h2 text-center fw-bold'>List of the something-est X of all time</p>
        </div>
    </body>
</html>