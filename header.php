<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
  <link href="//db.onlinewebfonts.com/c/e9691c5fb39fcf91f9c930d6b683123b?family=Bodoni+Bauer+BQ" rel="stylesheet" type="text/css"/>
  <link href="http://fonts.cdnfonts.com/css/helvetica-neue-9" rel="stylesheet">

  <?php wp_head();?>

  
                
  <title>Arc</title>
</head>
<body>
  <header class="section-hero">



    <div class="hero-container">
      <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="http://localhost/arc/">
            <img src="<?php echo get_template_directory_uri();?>/Photos/logo.png">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
        <?php
      
          wp_nav_menu( array(
            'menu'=> 'top-menu',
            'menu_class' => 'navbar-end',
            'container' => '',
            'add_a_class' => 'navbar-item main',
       
          ))
         ?>
        </div>
      </nav>
    </div>
  </header>