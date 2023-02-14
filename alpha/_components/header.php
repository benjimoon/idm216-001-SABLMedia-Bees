<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'IDM 216 | Tyson Bees';
$document_title = $page_title . ' | ' . $site_title; // Home | IDM232


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <img src="<?php echo site_url(); ?>/dist/images/svg/Background.svg" class="background--mobile" alt="Bee with trail">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <div class="header__logo">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Fav Icon.png" alt="">
  <a href="<?php echo site_url(); ?>/index.php">
            <img src="<?php echo site_url(); ?>/dist/images/svg/Logo+Bee.svg" alt="Bee with trail">
</a>
        </div>
  <title><?php echo $document_title ; ?></title>
</head>

<body>

<main>

  <!-- Main Content Begins -->
