<?php
include_once __DIR__ . '/app.php';
$page_title = 'Alpha Home';
include_once __DIR__ . '/_components/header.php';
$tacos = get_tacos();
$burritos = get_burritos();
$wraps = get_wraps();
$hoagies = get_hoagies();
$bowls = get_bowls();
$quesas = get_quesas();
$sandwiches = get_sandwiches ();
$drinks = get_drinks ();
?>



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
    <a href="menu.html"><button class="button__primary"><h2>Back to menu</h2></button></a>
    <a href="cart.html">
        <img src="<?php echo site_url(); ?>/dist/images/svg/Cart Icon.svg" alt="cart icon" class="cart">
    </a>
    <mobile-footer__order></mobile-footer__order>
</body>

<?php 
include __DIR__ . '/_components/quesa-table.php';
?>

<?php include_once __DIR__ . '/_components/footer.php';?>
</html>
