<?php
include_once __DIR__ . '/app.php';
$page_title = 'Menu';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get users data from database
$query = "SELECT * FROM tacos WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $taco = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}
?>

  <body>
    <div class="card-outer">
      <a href="menu-items.html"
        ><button class="close">
          <img src="images/svg/X.svg" alt="x" class="closein" /></button
      ></a>
      <div class="">
<?php
 $site_url = site_url();
          echo "
<img class='detail__item--image' src =' {$site_url}{$taco['image_path2']}'>
";
?>
      </div>
      <div class="card-inner">
        <h2 class="detail__item--name"><?php echo $taco['title']?></h2>
        <h2 class="detail__item--price"><?php echo $taco['price']?> </h2>
        <p class="detail__item--description">
        <?php echo $taco['description']?> <br /><br/>
        </p>
        <h2 class="detail__item--name">Special Instructions:</h2>
        <div id="rectangle"></div>
        <input type='hidden' name='userID' value='<?php echo "{$currentUser['id']}"; ?>'/>
                    <input type='hidden' name='mealID' value='<?php echo "{$mealID}"; ?>'/>
        <button type="submit" class="button__center"><h2>Add to Cart</h2></button>
      </div>
    </div>
    <div class="overlay"></div>
    <img src="images/svg/Background.svg" class="background--mobile" />
    <header class="header">
      <div class="header__logo">
        <img src="images/svg/Logo+Bee.svg" alt="Bee with trail" />
      </div>



<?php include_once __DIR__ . '/_components/footer.php';?>