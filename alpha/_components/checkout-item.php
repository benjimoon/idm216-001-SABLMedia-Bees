
<?php 

include '_components/prices.php';
$id = $row['catID'];
$site_url = site_url();

?>
<div class="main1">
    <div class="menu">
    <div class="menu__item">
            <img src="<?php echo site_url();?><?php echo $row['image_path2']?>" alt="" class="menu__item--image">
                <h2 class="menu__item--name"><?php echo $row['title']; ?></h2>
                <p class="menu__item--price"><?php echo $row['price']; ?></p>
                <form id="delete-form-<?php echo $row['id']; ?>" action='<?php echo "{$site_url}/_includes/delete-item.php" ?>' method='POST'>
    <input type='hidden' name='orderID' value='<?php echo "{$row['id']}"; ?>'/>
    <button type='submit' style='display: none;'></button>
</form>
<img src="<?php echo site_url(); ?>/dist/images/svg/Cancel Icon.svg" alt="cancel icon" class="menu__item--delete" onclick="document.getElementById('delete-form-<?php echo $row['id']; ?>').submit();" style="cursor: pointer;">
            <div class="amount"><?php echo $row['quantity']; ?> </div>
            </div>
        </div>
    </div>
</div>
