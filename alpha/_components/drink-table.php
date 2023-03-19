
<div>
<h1 class='menu text__title'>Drinks</h1>
<?php
if (!isset($drinks)) {
  echo '$drinks variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($drink = mysqli_fetch_array($drinks)) {
      echo "     

      <div class='menu'>
      <a href='{$site_url}/menu-drink-overlay.php?id={$drink['id']}'>
              <div class='menu__item'>
                  <img src='{$site_url}{$drink['image_path']}' class='menu__item--plus'>
                  <img src='{$site_url}{$drink['image_path2']}' class='menu__item--image'>
                  <h2 class='menu__item--name'> {$drink['title']}</h2>
                  <p class='menu__item--price'>$" . "{$drink['price']}</p>
              </div>
          </a>
  </div> ";
}
?>