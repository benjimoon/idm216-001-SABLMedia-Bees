
<div>
<h1 class='menu text__title'>Hot Dogs</h1>
<?php
if (!isset($hoagies)) {
  echo '$hoagies variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($hoagie = mysqli_fetch_array($hoagies)) {
      echo "     

      <div class='menu'>
          <a href='menu-item-overlay.html'>
              <div class='menu__item'>
                  <img src='{$site_url}{$hoagie['image_path']}' class='menu__item--plus'>
                  <img src='{$site_url}{$hoagie['image_path2']}' class='menu__item--image'>
                  <h2 class='menu__item--name'> {$hoagie['title']}</h2>
                  <p class='menu__item--price'>$" . "{$hoagie['price']}</p>
              </div>
          </a>
  </div> ";
}
?>