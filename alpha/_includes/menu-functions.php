<?php

// get all recipes fr<?php

/**
 * get all users from the database
 * @return object - mysqli_result
 */


function get_order_by_user_id($user) {
    global $db_connection;
    $query = "SELECT orders.id, orders.quantity, users.username, meals.id AS mealID, meals.title, meals.price, meals.image_path2\n"

    . "FROM orders \n"

    . "INNER JOIN users ON orders.userID = users.id \n"

    . "INNER JOIN meals ON orders.meal_id = meals.id \n"

    . "WHERE users.id = '{$user['id']}' AND status = 'active'"

    . "GROUP BY orders.id, orders.quantity, users.username, meals.id, meals.title, meals.price, meals.image_path2";
    
    // . "ORDER BY id DESC LIMIT 1";
 
    $result = mysqli_query($db_connection, $query);

    return $result;

}


?>