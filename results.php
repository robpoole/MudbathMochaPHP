<?php
include 'inc/functions.php';

foreach ($users as $name => $info) {
    $results[] = array(
        "user" => $name,
        "order_total" => number_format($info['orders'], 2),
        "payment_total" => number_format($info['payments'], 2),
        "balance" => number_format($info['balance'], 2)
    );
}

header('Content-Type: application/json');
print json_encode($results);