
<?php
include_once 'app.php';
$site_url = site_url();
include_once __DIR__ . '/_components/header.php';
?>


<div class="main1">
    <h1 class="menu text__title">Checkout</h1>
</div>
<?php
// ($user['isGuest']==0) ? "success": redirect_to('/auth/login.php') ;

$orderTotal = 0;
// $order = get_order_by_user_id($user['id']);
$order = get_order_by_user_id($user);



if ($order->num_rows > 0) {
    echo '<ul class="cart-item-list">';
    while($row = $order->fetch_assoc()) {
        include '_components/checkout-item.php';
    } // End while loop
    echo '</ul>';
} 
?>
<div class="main1">
    <h1 class="checkout text__title">Payment Options</h1>
      <div class="payment">
        <form>
          <div class="payment__radio-container venmo">
          <label>
    <input type="radio" name="radio">
    <span class="payment--text">
        <img class="payment-icon" src="<?php echo site_url(); ?>/dist/images/svg/venmo icon.svg" alt="venmo icon">
        Venmo
    </span>
</label>

        </div>
          <div class="payment__radio-container">
            <label><input type="radio" name="radio"> <span class="payment--text">Credit Card</span></label>
          </div>
        </form>
      </div>
</div>
<?php

$query= "SELECT amount FROM users WHERE user = {$user['id']}";
$result = mysqli_query($db_connection, $query);
$count = $user['amount'] + 1;



echo '<div class="main1">';
echo '<div class="payment-info">';
echo "<p><span class='bold'> Subtotal: </span> $" . $subTotal . "</p>"; 
echo "<p><span class='bold'>Tax: </span> 6%</p>";
echo "<p><span class='bold'>Total Price:</span> $" . $orderTotalPrice . "</p>"; 
echo "</div>";


?>

<a href="<?php echo "{$site_url}/confirmation.php" ?>">pay</a>