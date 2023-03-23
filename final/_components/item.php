<?php 
include_once 'app.php';
$site_url = site_url();
?>
<?php 
include_once 'app.php';
$site_url = site_url();
?>

<?php
// get meals data from database
$query = "SELECT * FROM meals WHERE category_id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

if ($result->num_rows > 0) {
    // display the first row
    $row = mysqli_fetch_assoc($result);
    echo "<a href='{$site_url}/item-details.php?id={$row['id']}&category_id={$_GET['id']}' class='text'>

    
    <div class='card open-btn'>
            <div class='imgBx'><img  src='{$site_url}{$row['image_path2']}'></div>
            <div class='details'>
            <div class='content'>
                <h2> {$row['title']}<br>
                <span> $" . "{$row['price']} </span></h2>
                <img class='menu__item--plus' src='{$site_url}{$row['image_path']}'>
            </div>
        </div>
        </a>
        </div>
";

    // display the remaining rows
    while ($row = mysqli_fetch_array($result)) {
        echo "<a href='{$site_url}/item-details.php?id={$row['id']}&category_id={$_GET['id']}' class='text'>

        <div class='card open-btn'>
        <div class='imgBx'><img  src='{$site_url}{$row['image_path2']}'></div>
        <div class='details'>
        <div class='content'>
            <h2> {$row['title']}<br>
            <span> $" . "{$row['price']} </span></h2>
            <img class='menu__item--plus' src='{$site_url}{$row['image_path']}'>
        </div>
    </div>
    </a>
    </div>
";

    }
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}
?>

<!-- 
<?php
// get users data from database
$query = "SELECT * FROM meals WHERE category_id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $meal = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}
?>
<?php
while ($row = mysqli_fetch_array($result)) {

echo"
<a href='{$site_url}/item-details.php?id={$row['id']}' class='text'>
<div class='menu'>
<div class='menu_item'>
<h2 class='menu__item--name'> {$row['title']}</h2>
    <p class='menu__item--price'> $" . "{$row['price']} </p>
    <img class='' src='{$site_url}{$row['image_path']}' class='menu__item--plus'>
    <img class='' src='{$site_url}{$row['image_path2']}' class='menu__item--image'>
</div>
</div>
</a>";
}
?> -->