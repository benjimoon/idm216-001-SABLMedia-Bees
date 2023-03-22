<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
$query = "SELECT * FROM meals WHERE id = 6";
$site_url = site_url();
$result = mysqli_query($db_connection, $query);
?>

<body>
    <div class="popup">
        <div class="popup-overlay"></div>
        <div class="main-popup">
            <div class="login">
                <img src="images/svg/X.svg" alt="x" class="close-btn"> <img src="images/png/Mobile-PNG/truck.gif"
                    alt="truck sign in" class="truck__loading">
                <div class="logintitle">
                    Password
                </div>
                <form class="login-form">
                    <input type="text" value="" class="login-input" placeholder="Enter Username">
                </form>
                <div class="logintitle2">
                    Username
                </div>
                <form class="login-form2">
                    <input type="password" value="" class="login-input2" placeholder="Enter Password">
                </form><button class="button__primary__sign">
                    <h2>Sign Up</h2>
                </button> <button class="button__secondary__sign"><a href="checkout-signed-in.html">
                        <h2>Sign In</h2>
                    </a></button>
            </div>
        </div>
    </div>
       
    <div class="main">
        <div class="start-order component-teal">
            <h2 class="start-order__text--title">What are you craving today?</h2>
            <img src="<?php echo site_url(); ?>/dist/images/svg/Teal Honeycomb Top.svg" alt="cart icon" class="start-order__pattern--top">
            <img src="<?php echo site_url(); ?>/dist/images/svg/Teal Honeycomb Bottom.svg" alt="cart icon" class="start-order__pattern--bottom">
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/taco.png" alt="cart icon" class="start-order__pattern--bottom">
            <div class="toggle-container">
                <div class="tab-slider--nav">
                    <ul class="tab-slider--tabs">
                        <li class="tab-slider--trigger active" rel="tab1">Asap</li>
                        <li class="tab-slider--trigger " rel="tab2">Schedule</li>
                    </ul>
                </div>
                <div class="tab-slider--container">
                    <div id="tab1" class="tab-slider--body">
                    </div>
                </div>
            </div>
            <a href="<?php echo site_url(); ?>/index.php"><button class="component__button"> Start Order</button></a>

        </div>
        <h1 class="text__title">Popular Orders</h1>
        <div class="home-order">
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Beef Short Rib Taco-mobile -3x.png" alt="cart icon" class="home-order__image">
            <h2 class="home-order__text--title">         
          <?php
        if (mysqli_num_rows($result) > 0) {
    // loop through each record
    while($row = mysqli_fetch_assoc($result)) {
        // output the record's data
        echo $row["title"];
    }
} else {
    echo "0 results";
}
?></h2>
<img src="<?php echo site_url(); ?>/dist/images/svg/White Plus.svg" alt="cart icon" class="home-order--plus">
        </div>
        <h1 class="text__title">Rewards</h1>
        <div class="start-order component-yellow">
            <h2 class="rewards__text--title">Sign in/up to see rewards</h2>
            <img src="<?php echo site_url(); ?>/dist/images/svg/Yellow Honeycomb Top.svg" alt="cart icon" class="start-order__pattern--top">
            <img src="<?php echo site_url(); ?>/dist/images/svg/Yellow Honeycomb Bottom.svg" alt="cart icon" class="start-order__pattern--bottom">
            <img src="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/truck.gif" alt="cart icon" class="rewards__image">
            <a href="<?php echo site_url(); ?>/login.php">
            <button class="component__button open-btn">Sign In/Up</button>
    </a>
        </div>

        <a href="<?php echo site_url(); ?>/cart.php">
        <img src="<?php echo site_url(); ?>/dist/images/svg/Cart Icon.svg" alt="cart icon" class="cart">
    </a>
</body>
<?php include_once __DIR__ . '/_components/footer.php';?>
</html>