
<div>
<h1 class='menu text__title'>Sandwiches/Buns</h1>
<?php
if (!isset($sandwiches)) {
  echo '$sandwiches variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($sandwich = mysqli_fetch_array($sandwiches)) {
      echo "     

      <div class='menu'>
          <a href='menu-item-overlay.html'>
              <div class='menu__item'>
                  <img src='{$site_url}{$sandwich['image_path']}' class='menu__item--plus'>
                  <img src='{$site_url}{$sandwich['image_path2']}' class='menu__item--image'>
                  <h2 class='menu__item--name'> {$sandwich['title']}</h2>
                  <p class='menu__item--price'>$" . "{$sandwich['price']}</p>
              </div>
          </a>
  </div> ";
}
?>