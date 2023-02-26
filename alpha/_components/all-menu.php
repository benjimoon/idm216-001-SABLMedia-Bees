
<div>

<?php
if (!isset($bowls)) {
  echo '$bowls variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($bowl = mysqli_fetch_array($bowls)) {
      echo "     

<div class='all-menu-items'>

                  <h2 class='menu__item--name'> {$bowl['title']}</h2>
                  <p class='menu__item--price'>$" . "{$bowl['price']}</p>
                  <p class='menu__item--price'>$" . "{$bowl['description']}</p>
                  <h2 > ID: {$bowl['id']}</h2>
</div> ";
}
?>
<div>

<?php
if (!isset($burritos)) {
  echo '$tacos variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($burrito = mysqli_fetch_array($burritos)) {
      echo "     

      <div class='all-menu-items'>

                  <h2 class='menu__item--name'> {$burrito['title']}</h2>
                  <p class='menu__item--price'>$" . "{$burrito['price']}</p>
                  <p class='menu__item--price'>$" . "{$burrito['description']}</p>
                  <h2 > ID: {$burrito['id']}</h2>
 </div> ";
}
?>

<div>
<?php
if (!isset($drinks)) {
  echo '$drinks variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($drink = mysqli_fetch_array($drinks)) {
      echo "     
      <div class='all-menu-items'>
                  <h2 class='menu__item--name'> {$drink['title']}</h2>
                  <p class='menu__item--price'>$" . "{$drink['price']}</p>
                  <p class='menu__item--price'>$" . "{$drink['description']}</p>
                  <h2 > ID: {$drink['id']}</h2>
  </div> ";
}
?>

<div>
<?php
if (!isset($hoagies)) {
  echo '$hoagies variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($hoagie = mysqli_fetch_array($hoagies)) {
      echo "     
      <div class='all-menu-items'>
                  <h2 class='menu__item--name'> {$hoagie['title']}</h2>
                  <p class='menu__item--price'>$" . "{$hoagie['price']}</p>
                  <p class='menu__item--price'>$" . "{$hoagie['description']}</p>
                  <h2 > ID: {$hoagie['id']}</h2> 
                  </div>";
}
?>

<div>
<?php
if (!isset($quesas)) {
  echo '$quesas variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($quesa = mysqli_fetch_array($quesas)) {
      echo "     
      <div class='all-menu-items'>

                  <h2 class='menu__item--name'> {$quesa['title']}</h2>
                  <p class='menu__item--price'>$" . "{$quesa['price']}</p>
                  <p class='menu__item--price'>$" . "{$quesa['description']}</p>
                  <h2 > ID: {$quesa['id']}</h2>
</div>";
}
?>

<div>
<?php
if (!isset($sandwiches)) {
  echo '$sandwiches variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($sandwich = mysqli_fetch_array($sandwiches)) {
      echo "     

      <div class='all-menu-items'>

                  <h2 class='menu__item--name'> {$sandwich['title']}</h2>
                  <p class='menu__item--price'>$" . "{$sandwich['price']}</p>
                  <p class='menu__item--price'>$" . "{$sandwich['description']}</p>
                  <h2 > ID: {$sandwich['id']}</h2>
 </div>";
}
?>

<div>
<?php
if (!isset($tacos)) {
  echo '$tacos variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($taco = mysqli_fetch_array($tacos)) {
      echo "     
      <div class='all-menu-items'>
                  <h2 class='menu__item--name'> {$taco['title']}</h2>
                  <p class='menu__item--price'>$" . "{$taco['price']}</p>
                  <p class='menu__item--price'>$" . "{$taco['description']}</p>
                  <h2 > ID: {$taco['id']}</h2>
 </div>";
}
?>

<div>
<?php
if (!isset($wraps)) {
  echo '$tacos variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($wrap = mysqli_fetch_array($wraps)) {
      echo "     

      <div class='all-menu-items'>

                  <h2 class='menu__item--name'> {$wrap['title']}</h2>
                  <p class='menu__item--price'>$" . "{$wrap['price']}</p>
                  <p class='menu__item--price'>$" . "{$wrap['description']}</p>
                  <h2 > ID: {$wrap['id']}</h2>
</div>";
}
?>