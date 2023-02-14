<div>
<h1 class='menu text__title'>Burritos</h1>
<?php
if (!isset($burritos)) {
  echo '$tacos variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($burrito = mysqli_fetch_array($burritos)) {
      echo "     

      <div class='menu'>
          <a href='menu-item-overlay.html'>
              <div class='menu__item'>
                  <img src='{$site_url}{$burrito['image_path']}' class='menu__item--plus'>
                  <img src='{$site_url}{$burrito['image_path2']}' class='menu__item--image'>
                  <h2 class='menu__item--name'> {$burrito['title']}</h2>
                  <p class='menu__item--price'>$" . "{$burrito['price']}</p>
              </div>
          </a>
  </div> ";
}
?>
