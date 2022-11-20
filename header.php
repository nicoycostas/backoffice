<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <!--google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet"> 
    <?php wp_head(); ?>
    <title><?php wp_title(''); ?></title>
  </head>
  <body class="">

 
    <header>
        <!-- top header -->
      
        <h1 class="header-title">Costas Nicou Back Office</h1>
        
        <!-- bottom header -->    
        <nav class="navbar d-flex justify-content-around">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/profile-pic.jpeg" alt="" class="navbar-brand">

            <!-- dynamic menu -->            
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="<?php echo get_home_url(); ?>" class="nav-link">Articles</a> </li>
                <li class="nav-item"><a href="<?php echo get_home_url(); ?>/journal" class="nav-link">Journal</a></li>
                <li class="nav-item"><a href="<?php echo get_home_url(); ?>/note" class="nav-link">Notes</a></li>
                <li class="nav-item"><a href="<?php echo get_home_url(); ?>/centralpoint" class="nav-link">Central Points</a></li>
                <li class="nav-item"> <a href="<?php echo get_home_url(); ?>/strategy" class="nav-link">Strategies</a></li>
                <li class="nav-item"><a href="<?php echo get_home_url(); ?>/decision" class="nav-link">Decisions</a></li>
                <li class="nav-item"><a href="<?php echo get_home_url(); ?>/goal" class="nav-link">Goals</a></li>
            </ul>
        </nav>

    </header>
    <main>

