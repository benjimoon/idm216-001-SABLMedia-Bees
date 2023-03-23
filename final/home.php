<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
$query = "SELECT * FROM meals WHERE id = 6";
$site_url = site_url();
$result = mysqli_query($db_connection, $query);
?>



<body>
    
   
    <div class="main-home">
        <div class="start-order component-teal">
            <h2 class="start-order__text--title">What are you craving today?</h2>
            <img src="<?php echo site_url(); ?>/dist/images/svg/Teal Honeycomb Top.svg" alt="cart icon" class="start-order__pattern--top">
            <img src="<?php echo site_url(); ?>/dist/images/svg/Teal Honeycomb Bottom.svg" alt="cart icon" class="start-order__pattern--bottom">
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/taco.png" alt="cart icon" class="start-order__pattern--bottom">
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/pattern-desktop.svg" class="start-order__pattern--bottom-desktop" alt="pattern" >
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/taco-desktop.png" class="start-order__pattern--bottom-desktop" alt="taco">
         
            <div class="toggle-container">
                <div class="dropdown">
                    <select name="one" class="dropdown-select">
                      <option value="">Pickup time…</option>
                      <option value="1">ASAP</option>
                      <option value="2">11:00</option>
                      <option value="3">11:30</option>
                      <option value="4">12:30</option>
                    </select>
                  </div>
             
            </div>
            <a href="<?php echo site_url(); ?>/index.php"><button class="component__button"> Start Order</button></a>
        </div>
        <h1 class="text__title home-heading">Featured Item</h1>
        <div class="home-order">
            <!-- <a id="current__link" href="menu.html"> -->
                <img class="home-order__image" id="current__image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Beef Short Rib Taco-mobile -3x.png" alt="Korean BBQ Beef Short Rib Taco">
            <!-- </a> -->
            <h2 class="home-order__text--title" id="current__title">Korean BBQ Beef Short Rib Taco</h2>
           
            <!-- <img class="arrow" id="previous__arrow" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/arrow left.png">
            <img class="arrow" id="next__arrow" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/arrow right.png"> -->
        </div>
        <h1 class="text__title home-heading-rewards" >Rewards</h1>
        <div class="start-order component-yellow">
            <h2 class="rewards__text--title">Sign in/up to see rewards</h2>
            <img class="start-order__pattern--top" src="<?php echo site_url(); ?>/dist/images/svg/Yellow Honeycomb Top.svg">
            <img class="start-order__pattern--bottom" src="<?php echo site_url(); ?>/dist/images/svg/Yellow Honeycomb Bottom.svg">
            <img class="start-order__pattern--bottom-desktop" src="<?php echo site_url(); ?>/dist/images/svg/purple-pattern-desktpo.svg">
            <img class="rewards__image" src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/truck.gif">
           <a href="<?php echo site_url(); ?>/login.php"><button class="component__button open-btn">Sign In/Up</button></a> 
        </div>

        <a href="cart.html"><img class="cart" src="<?php echo site_url(); ?>/dist/images/svg/Cart Icon.svg"></a>
        <mobile-footer__home></mobile-footer__home>
        <script src="script/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
<?php include_once __DIR__ . '/_components/footer.php';?>
</html>