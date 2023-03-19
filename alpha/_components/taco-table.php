
<div>
<h1 class='menu text__title'>Tacos</h1>
<?php
if (!isset($tacos)) {
  echo '$tacos variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($taco = mysqli_fetch_array($tacos)) {
      echo "     

      <div class='menu'>
          <a href='{$site_url}/menu-taco-overlay.php?id={$taco['id']}'>
              <div class='menu__item'>
                  <img src='{$site_url}{$taco['image_path']}' class='menu__item--plus'>
                  <img src='{$site_url}{$taco['image_path2']}' class='menu__item--image'>
                  <h2 class='menu__item--name'> {$taco['title']}</h2>
                  <p class='menu__item--price'>$" . "{$taco['price']}</p>
              </div>
          </a>
  </div> ";
}
?>
