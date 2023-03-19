
<div>
<h1 class='menu text__title'>Wraps</h1>
<?php
if (!isset($wraps)) {
  echo '$tacos variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($wrap = mysqli_fetch_array($wraps)) {
      echo "     

      <div class='menu'>
      <a href='{$site_url}/menu-wrap-overlay.php?id={$wrap['id']}'>
              <div class='menu__item'>
                  <img src='{$site_url}{$wrap['image_path']}' class='menu__item--plus'>
                  <img src='{$site_url}{$wrap['image_path2']}' class='menu__item--image'>
                  <h2 class='menu__item--name'> {$wrap['title']}</h2>
                  <p class='menu__item--price'>$" . "{$wrap['price']}</p>
              </div>
          </a>
  </div> ";
}
?>