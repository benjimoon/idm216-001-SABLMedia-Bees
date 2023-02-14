<?php
include_once __DIR__ . '/app.php';
$page_title = 'Alpha Home';
include_once __DIR__ . '/_components/header.php';
$tacos = get_tacos();
$burritos = get_burritos();
$wraps = get_wraps();
$hoagies = get_hoagies();
?>


<div class="grid-3-col">
<?php 

// include __DIR__ . '/_components/menu-table.php';
// include __DIR__ . '/_components/sides-table.php';
// include __DIR__ . '/_components/drinks-table.php';


?>
</div>
<!DOCTYPE html>
<html lang="en">


<body>

    <div class="main">
        <form class="search-form">
            <input type="search" value="" placeholder="Search menu item" class="search-input">
            <button type="submit" class="search-button">
                <img class="submit-button" src="<?php echo site_url(); ?>/dist/images/svg/navigate/light/bar/icon/outline/search-normal.svg" alt="">
            </button>
            <div class="search-option">
                <img class="submit-button" src="<?php echo site_url(); ?>/dist/images/svg/filter icon.svg" alt="">
            </div>
        </form>
        <div class="menu__categories">
            <h1 class="menu text__title">Menu</h1>
            <a href="<?php echo site_url(); ?>/taco-items.php" class="text">
                <div class="menu__category teal">
                <img class="menu__category--image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Taco Picture.png" alt="Thai Basil Chicken Taco">
                    <h2 class="menu__category--name">Tacos</h2>
                    <img class="menu__category--pattern" src="<?php echo site_url(); ?>/dist/images/svg/Teal Pattern.svg">
                </div>
            </a>
            <a href="<?php echo site_url(); ?>/burrito-items.php" class="text">
            <div class="menu__category orange">
                <img class="menu__category--image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Burrito Image.png" alt="Thai Basil Chicken Taco">
                <h2 class="menu__category--name">Burritos</h2>
                <img class="menu__category--pattern" src="<?php echo site_url(); ?>/dist/images/svg/Orange Pattern.svg">
            </div>
            </a>
            <a href="<?php echo site_url(); ?>/wrap-items.php" class="text">
            <div class="menu__category blue">
                <img class="menu__category--image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Wraps Image.png" alt="Thai Basil Chicken Taco">
                <h2 class="menu__category--name">Wraps</h2>
                <img class="menu__category--pattern" src="<?php echo site_url(); ?>/dist/images/svg/Blue Pattern.svg">
            </div>
</a>
<a href="<?php echo site_url(); ?>/hoagie-items.php" class="text">
            <div class="menu__category purple">
                <img class="menu__category--image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Hot Dogs Image.png" alt="Thai Basil Chicken Taco">
                <h2 class="menu__category--name">Hot Dogs</h2>
                <img class="menu__category--pattern" src="<?php echo site_url(); ?>/dist/images/svg/Purple Pattern.svg">
            </div>
</a>
<a href="<?php echo site_url(); ?>/quesa-items.php" class="text">
            <div class="menu__category teal">
                <img class="menu__category--image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Thai-Chicken-Quesadilla.png" alt="Thai Basil Chicken Taco">
                <h2 class="menu__category--name">Quesadillas</h2>
                <img class="menu__category--pattern" src="<?php echo site_url(); ?>/dist/images/svg/Teal Pattern.svg">
            </div>
</a>  
<a href="<?php echo site_url(); ?>/bowl-items.php" class="text">
            <div class="menu__category orange">
                <img class="menu__category--image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/rice-bowl.png" alt="Thai Basil Chicken Taco">
                <h2 class="menu__category--name">Rice Bowls</h2>
                <img class="menu__category--pattern" src="<?php echo site_url(); ?>/dist/images/svg/Orange Pattern.svg">
            </div>
</a>
<a href="<?php echo site_url(); ?>/sandwich-items.php" class="text">
            <div class="menu__category blue">
                <img class="menu__category--image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/sandwich.png" alt="Thai Basil Chicken Taco">
                <h2 class="menu__category--name">Sandwich/Buns</h2>
                <img class="menu__category--pattern" src="<?php echo site_url(); ?>/dist/images/svg/Blue Pattern.svg">
            </div>
</a>
<a href="<?php echo site_url(); ?>/drink-items.php" class="text">
            <div class="menu__category purple">
                <img class="menu__category--image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/thai-tea.png" alt="Thai Basil Chicken Taco">
                <h2 class="menu__category--name">Drinks</h2>
                <img class="menu__category--pattern" src="<?php echo site_url(); ?>/dist/images/svg/Purple Pattern.svg">
            </div>
</a>
         </div>
    </div>
    <!-- <a href="menu.html"><button class="button__primary"><h2>Back to menu</h2></button></a> -->
    <a href="cart.html">
        <img src="<?php echo site_url(); ?>/dist/images/svg/Cart Icon.svg" alt="cart icon" class="cart">
    </a>
    <mobile-footer__order></mobile-footer__order>
</body>

</html>
<?php include_once __DIR__ . '/_components/footer.php';?>