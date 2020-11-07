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
        
        <h1>Menu</h1>

        <?php
        $drinks = json_decode(file_get_contents('data/prices.json'));
        foreach ($drinks as $drink) {
            echo '<div class="drink">' . $drink->drink_name . '</div>';
            echo '<div class="prices">';

            foreach ($drink->prices as $size => $price) {
                echo '<span class="size">'.$size.' <span class="price">&dollar;'.$price.'</span></span>';
            }

            echo '</div>';
        }
        ?>

    </body>
</html>