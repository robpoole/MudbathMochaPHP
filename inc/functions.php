<?php

// Get all of our data
$drinks = json_decode(file_get_contents('data/prices.json'));
$orders = json_decode(file_get_contents('data/orders.json'));
$payments = json_decode(file_get_contents('data/payments.json'));

// Look up the cost of a drink based on name and size
function lookupPrice($drinkName, $drinkSize) {
    global $drinks;
    foreach ($drinks as $drink) {
        if ($drink->drink_name == $drinkName) {
            foreach ($drink->prices as $size => $price) {
                if ($size == $drinkSize) {
                    return $price;
                }
            }
        }
    }
}

// Total up the cost of orders per user
foreach ($orders as $order) {
    if (!isset($users[$order->user]['orders'])) {
        $users[$order->user]['orders'] = 0;
    }
    $users[$order->user]['orders'] += lookupPrice($order->drink, $order->size);
}

// Total up the payments made per user
foreach ($payments as $payment) {
    if (!isset($users[$payment->user]['payments'])) {
        $users[$payment->user]['payments'] = 0;
    }
    $users[$payment->user]['payments'] += $payment->amount;
}

// Sort the users alphabetically
ksort($users);

// Calculate the final balance for users
foreach ($users as $name => $info) {
	$balance = $info['orders'] - $info['payments'];
	$users[$name]['balance'] = $balance;
}