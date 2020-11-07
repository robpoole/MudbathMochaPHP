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
        
        <h1>Summary</h1>

        <?php
        foreach ($users as $name => $info) {
            $className = ($info['balance'] >= 0 ? "green" : "red");
            echo '<div class="user">';
            echo '<span class="name">'.$name.'</span>';
            echo '<span class="price '.$className.'">&dollar;'.number_format($info['balance'],2).'</span>';
            echo '</div>';
        }
        ?>

    </body>
</html>