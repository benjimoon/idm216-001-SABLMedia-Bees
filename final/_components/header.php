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
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/png/Mobile-PNG/Fav Icon.png" alt="">
  <img src="<?php echo site_url(); ?>/dist/images/svg/Background.svg" class="background--mobile" alt="Bee with trail">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">            
</head>

<body>
  <!-- <a href="<?php echo site_url(); ?>/index.php">
            <img src="<?php echo site_url(); ?>/dist/images/svg/Logo+Bee.svg" alt="Bee with trail"> -->
            <header class="header">
        <nav class=".desktop-nav nav" id="nav">
            <div class="header__logo">
                <a href="<?php echo site_url(); ?>/index.php">
            <img src="<?php echo site_url(); ?>/dist/images/svg/Logo+Bee.svg" alt="Bee with trail">
          </a>

            
            <div class="nav-right">
          
                    <a href="<?php echo site_url(); ?>/index.php" class="active">Home</a>

                    <a href="<?php echo site_url(); ?>/menu.php"class="active">Order</a>
         
                    <a href="<?php echo site_url(); ?>/rewards.php" class="active">Rewards</a>
                </div>
            </div>
        </nav>

  <title><?php echo $document_title ; ?></title>


  <div class="header__banner">
                  <a href="" class="header__banner--text">
                    <img src="<?php echo site_url(); ?>/dist/images/svg/clock.svg" alt="Bee with trail" class="header__banner--icon"> 11:00 am - 5:00 pm
                    </a>
                    <a href="" class= "header__banner--text">
                    <img src="<?php echo site_url(); ?>/dist/images/svg/place.svg" alt="Bee with trail" class="header__banner--icon"> 3260 Spruce St.
                    </a>
                  </div>
</header>
<main>

  <!-- Main Content Begins -->
