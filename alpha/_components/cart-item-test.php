<?php 

$quantity = intval($row['quantity']);
$meal_price = intval($row['meal_price']);
$price = $meal_price + intval($row['protein_price']);
$orderTotal += $price * $quantity;
$orderTotalPrice = number_format("{$orderTotal}", 2);
// $site_url = site_url();

if (isset($row['tacos_name'])) {
    echo $row['tacos_image'] . ' ' . $row['tacos_name'] . ' ' . $row['tacos_price'];
}
if (isset($row['drink_name'])) {
    echo $row['drink_image'] . ' ' . $row['drink_name'] . ' ' . $row['drink_price'];
}

?>


<li class="cart-item">
    <div class="cart-content">
        <div class="cart-image">
            <img src="<?php echo site_url(); ?>/dist/images/meals/<?php echo $row['meal_image']?>" alt="" class="cart-item-image">
        </div>
        <div class="cart-item-text-content">
            <div class="cart-item-name-and-price">
                <h3 class="cart-item-name"><?php echo $row['tacos_name']; ?></h3>
                <h3 class="cart-item-price"><?php echo "$" . $row['tacos_price'];?></h3>
            </div>
            <!-- for toppingName, it is going to have to loop through the array -->
            <p class="cart-item-description"><?php echo $row['protein_name']; ?><?php echo "+ $" . $row['protein_price'];?></p>
            <p class="cart-item-description"><?php echo $row['restrictions_name']; ?></p>
            <div class="cart-item-actions">
                <div class="item-quantity">
                    <p class="quantity"><?php echo $quantity; ?></p>
                    <p class="quantity"><?php echo $price; ?></p>
                </div>
            </div>
        </div>
    </div>
</li>