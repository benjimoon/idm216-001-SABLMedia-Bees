<?php 

include '_components/prices.php';
$id = $row['catID'];
$site_url = site_url();

?>
<li class="cart-item">
    <div class="cart-content">
        <div class="cart-image">
            <img src="<?php echo site_url(); ?><?php echo $row['image_path2']?>" alt="" class="cart-item-image">
        </div>
        <div class="cart-item-text-content">
            <div class="cart-item-name-and-price">
                <h3 class="cart-item-name"><?php echo $row['title']; ?></h3>
                <h3 class="cart-item-price"><?php echo $row['price']; ?></h3>
            </div>
            <p class="cart-item-description"></p>

            <div class="cart-item-actions">
                <div class="item-quantity">
                <p class="quantity"><?php echo $row['quantity']; ?></p>
                </div>
            </div>
        </div>
    </div>
</li>
