<?php 
include_once 'app.php';
$site_url = site_url();
?>

<?php
// get users data from database
$query = "SELECT * FROM meals WHERE id = {$_GET['id']}";
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
<p><?php echo $meal['title'];?></p>
<p><?php echo $meal['description'];?></p>
<img src="<?php echo $site_url . $meal['image_path2'];?>">

<form action='<?php echo"{$site_url}/_includes/process_orders.php" ?>' method="POST">
        <div>
          <label for="notes">Add special notes</label>
          <div>
            <input id="notes" name="note" type="text">
          </div>
        </div>
    <input type='hidden' name='userID' value='<?php echo "{$user['id']}"; ?>'/>
    <input type='hidden' name='meal_id' value='<?php echo "{$mealID}"; ?>'/>
    <button type='submit'>Submit</button>
</form>

