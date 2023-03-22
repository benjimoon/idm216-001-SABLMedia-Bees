<?php
include_once __DIR__ . '/app.php';
$page_title = 'Alpha Home';
include_once __DIR__ . '/_components/header.php';
?>



<body>

<div class="main-menuitem">
<div class="container">
    <a href="index.php"><button class="button__primary"><h2>Back to menu</h2></button></a>
    <a href="<?php echo site_url(); ?>/cart.php">
        <img src="<?php echo site_url(); ?>/dist/images/svg/Cart Icon.svg" alt="cart icon" class="cart">
    </a>
    <mobile-footer__order></mobile-footer__order>
</body>
<?php 
include __DIR__ . '/_components/item.php';
 ?> 
<?php include_once __DIR__ . '/_components/footer.php';?>
</html>
