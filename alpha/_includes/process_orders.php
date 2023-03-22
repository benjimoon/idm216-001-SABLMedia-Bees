<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}



// Store $_POST data to variables for readability

//required values
$userID_value = sanitize_value($_POST['userID']);
$mealID_value = sanitize_value($_POST['meal_id']);
$note_value = sanitize_value($_POST['note']);

// if (!$mealID_value || $mealID_value == 0) {
// redirect_to('/index.php');
// }

// optional values
// $note_value = isset($_POST['note']) ? sanitize_value(implode(",", $_POST['meal_id'])) : NULL;

$query = "INSERT INTO orders (userID, meal_id, note) VALUES ('{$userID_value}', '{$mealID_value}', '{$note_value}')";
$result = mysqli_query($db_connection, $query);

// var_dump($query);
// var_dump($_POST);
// die;

if ($result) {
   redirect_to('/cart.php');
} 
else {
    $error_message = 'info was not added';
    // redirect_to('/admin/recipes?error=' . $error_message);
}

?>