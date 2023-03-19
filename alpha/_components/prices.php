<?php 

$id = $row['meal_id'];
$quantity = intval($row['quantity']);
    $price = floatval($row['price']);
//     var_dump($price);
// die;
    $taxprice = $price * 1.06;
    $orderTotal += $taxprice * $quantity;

$orderTotalPrice = number_format("{$orderTotal}", 2);

?>