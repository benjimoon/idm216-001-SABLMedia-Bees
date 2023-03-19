<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$username_value = sanitize_value($_POST['username']);
$password_value = sanitize_value($_POST['pass']);
$newUser = get_user_by_username($username_value, $password_value);

if ($newUser) {
    
    //update current user order, replace id with newuser id 
    $query = "UPDATE orders SET userID = {$newUser['id']} WHERE userID = {$user['id']} ORDER BY id";

    // var_dump($query);
    // var_dump($user);
    // var_dump($userOrder);
    // die;
    $result = mysqli_query($db_connection, $query);
    delete_user_by_id($user['id']);
    add_user_to_session($newUser);
   
    $query = "SELECT * FROM orders WHERE userID = {$newUser['id']} AND status = 'active' AND meal_ID != 'NULL'";
    $result = mysqli_query($db_connection, $query);
    if (mysqli_num_rows($result) > 0) {
        redirect_to('/checkout.php'); 
    }
    else {
        // redirect_to('/profile.php');
        $return_to = isset($_SESSION['return_to']) ? $_SESSION['return_to'] : '/';
        header('Location: ' . $return_to);
        exit;
    }  
} else {
    echo "here";
    $error_message = 'User was not logged in: ' . mysqli_error($db_connection);
    redirect_to('/auth/login.php?error=' . $error_message);
}