<?php
include_once 'app.php';

$orderTotal = 0;

$query = "SELECT orders.id, orders.quantity, users.username, tacos.title AS tacos_name, tacos.price AS tacos_price, tacos.image_path2 AS tacos_image, drinks.title AS drink_name, drinks.price AS drink_price, drinks.image_path2 AS drink_image\n"

    . "FROM orders\n"

    . "INNER JOIN users ON orders.userID = users.id\n"

    . "LEFT JOIN meals ON orders.tacosID = meals.id\n"

    . "LEFT JOIN drinks ON orders.drinkID = drinks.id\n"
    
    . "WHERE users.id = '{$currentUser['id']}'"

    . "GROUP BY orders.id, orders.quantity, users.username, tacos.title, tacos.price, tacos.image_path2, drinks.title, drinks.price, drinks.image";


 
$result = mysqli_query($db_connection, $query);

if ($result === false) {
    echo 'Query failed: ' . mysqli_error($db_connection);
} elseif ($result->num_rows > 0) {
    echo '<ul class="cart-item-list">';
    while($row = $result->fetch_assoc()) {
        include '_components/cart/cart-item-test.php';
    } // End while loop
    echo '</ul>';
} else {
    echo 'No results found.';
}

echo "$" . $orderTotal;

?>