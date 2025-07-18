<?php
session_name("TimeRank");
session_start(); // Starts the PHP session
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel=stylesheet type='text/css' href='./Protected/styles.css'>

        <style type="text/css">

        </style>
    </head>

    <body>
        <?php
        if(isset($_COOKIE['username'])) {
            echo $_COOKIE['username'];
        }
        ?>
    </body>
</html>