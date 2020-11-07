<?php include 'inc/functions.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link type="text/css" rel="stylesheet" href="/css/styles.css" />
        <title>Mudbath Mocha</title>
    </head>
    <body>
        <?php include 'inc/header.php'; ?>
        
        <h1>Payments</h1>

        <?php
        foreach ($users as $name => $info) {
            echo '<div class="user">';
            echo '<span class="name">'.$name.'</span>';
            echo '<span class="price">&dollar;'.number_format($info['payments'],2).'</span>';
            echo '</div>';
        }
        ?>

    </body>
</html>