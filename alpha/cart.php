<?php
include_once 'app.php';
include_once __DIR__ . '/_components/header.php';
$site_url = site_url();
?>
<div class="main1">
    <h1 class="menu text__title">Cart</h1>
</div>
<?php
// ($user['isGuest']==0) ? "success": redirect_to('/auth/login.php') ;

$orderTotal = 0;
// var_dump($currentUser);
// die;

// var_dump($user);
$order = get_order_by_user_id($user);

if ($order->num_rows > 0) {
    while($row = $order->fetch_assoc()) {

        include '_components/cart-item.php';
    } // End while loop

    echo '<div class="main1">';
    echo '<div class="payment-info">';
    echo "<p><span class='bold'> Subtotal: </span> $" . $subTotal . "</p>"; 
    echo "<p><span class='bold'>Tax: </span> 6%</p>";
    echo "<p><span class='bold'>Total Price:</span> $" . $orderTotalPrice . "</p>"; 
    echo "</div>";

    echo '<div class="button-container--cart">';
    echo "<a href='{$site_url}/index.php'><button class='button__secondary--cart'>";
    echo "<h2>Add Items</h2>";
    echo "</button></a>";
    echo "<a href='";
    if ($user['isGuest']) {
        echo "{$site_url}/login.php";
    }
    else {
        echo "{$site_url}/checkouts.php";
    }
    echo "'><button class='button__primary--cart'>";
    echo "<h2>Checkout</h2>";
    echo "</button></a>";
    echo '</div>';

} 
else {
    echo 'empty cart';
    echo "<a href='{$site_url}/index.php'>menu</a>";
}
?>
