
<div>
<h1 class='menu text__title'>Bowls</h1>
<?php
if (!isset($bowls)) {
  echo '$bowls variable is not defined. Please check the code.';
}
  // Cant combine functions with string so we have to assign the function to a variable here.
  $site_url = site_url();
  while ($bowl = mysqli_fetch_array($bowls)) {
      echo "     

      <div class='menu'>
      <a href='{$site_url}/menu-bowl-overlay.php?id={$bowl['id']}'>
              <div class='menu__item'>
                  <img src='{$site_url}{$bowl['image_path']}' class='menu__item--plus'>
                  <img src='{$site_url}{$bowl['image_path2']}' class='menu__item--image'>
                  <h2 class='menu__item--name'> {$bowl['title']}</h2>
                  <p class='menu__item--price'>$" . "{$bowl['price']}</p>
              </div>
          </a>
  </div> ";
}
?>