<?php
include_once __DIR__ . '/app.php';
$page_title = 'Alpha Home';
include_once __DIR__ . '/_components/header.php';
$site_url = site_url();
?>
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
<?php
// get users data from database
$query = "SELECT * FROM categories";
$result = mysqli_query($db_connection, $query);


while ($categories = mysqli_fetch_array($result)) {

echo"
<a href='{$site_url}/category.php?id={$categories['id']}' class='text'>
<div class='menu__category {$categories['class_color']}'>
    <img class='menu__category--image' src='{$site_url}{$categories['image']}'>
    <h2 class='menu__category--name'>{$categories['title']}</h2>
    <img class='menu__category--pattern' src='{$site_url}{$categories['image_background']}'>
</div>
</a>";
}
?>
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