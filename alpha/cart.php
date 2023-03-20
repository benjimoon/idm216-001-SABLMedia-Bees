
<?php
include_once 'app.php';

$site_url = site_url();


// ($user['isGuest']==0) ? "success": redirect_to('/auth/login.php') ;

$orderTotal = 0;
// var_dump($currentUser);
// die;
$order = get_order_by_user_id($user);

if ($order->num_rows > 0) {

    echo '<ul class="cart-item-list">';
    while($row = $order->fetch_assoc()) {
        include '_components/cart-item.php';
    } // End while loop
    echo '</ul>';
    echo "$" . $orderTotalPrice; 

    // echo "<a href='{$site_url}/checkout.php'>Checkout</a>";
    // var_dump($user['isGuest']);
    // die;
    echo "<a href='";
    if ($user['isGuest']) {
        echo "{$site_url}/login.php";
    }
    else {
        echo "{$site_url}/checkout.php";
    }
    echo "'>Checkout</a>";
} 
else {
    echo 'empty cart';
    echo "<a href='{$site_url}/index.php'>menu</a>";
}

?>

