<?php 
include_once 'app.php';
$site_url = site_url();
$page_title = 'Alpha Home';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get users data from database
$category_id = $_GET['category_id'];
$mealID = $_GET['id'];

$query = "SELECT * FROM meals WHERE id = {$mealID}";
$result = mysqli_query($db_connection, $query);
// var_dump($result);
// die;

if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $meal = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

$mealID = $_GET['id'];
?>
<!-- fix link in card outer -->
<div class="card-outer">
<a href="<?php echo "{$site_url}/category.php?id={$category_id}" ?>"> 
<img src="<?php echo site_url(); ?>/dist/images/svg/X.svg" alt="cart icon" class="close-btn">
</a>
<div class="">
<img src="<?php echo $site_url . $meal['image_path2'];?>" class="detail__item--image">
</div>
<div class="card-inner">
<h2 class="detail__item--name"><?php echo $meal['title'];?></h2>
<p class="detail__item--description"><?php echo $meal['description'];?></p><br><br>
<form action='<?php echo"{$site_url}/_includes/process_orders.php" ?>' method="POST">
          <label for="notes" class="">Special Instructions</label>
          <div>
          <input id="notes" name="note" type="text" class="special-notes"> 
          </div>
        </div>
    <input type='hidden' name='userID' value='<?php echo "{$user['id']}"; ?>'/>
    <input type='hidden' name='meal_id' value='<?php echo "{$mealID}"; ?>'/>
    <button type='submit' class='button__center'><h2>Add to Cart</h2></button>
</form>
</div>
</div>
<?php
include_once __DIR__ . '/_components/footer.php';
?>




