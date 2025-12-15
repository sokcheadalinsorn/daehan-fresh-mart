<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

</head>
<body <?php body_class(); ?>>
    <header>
        <!-- header -->
        <div class="header">
            <img src="http://daehan-fresh-mart.test/wp-content/uploads/2025/12/photo_6163370759909215459_y_2_-removebg-preview1.png" alt="logo">
            <div class="search-container">
                <form action="" method="get" class="search-bar">
                <span class="search-icon"><i class="fas fa-search"></i></span>
        
                <input type="text" placeholder="Search..." name="" class="search-input"> 
            </div>
    
            <?php wp_nav_menu(['theme_location'=>'primary']); ?>
            <div class="icon">
                <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>
                <i class="fa-solid fa-bell" style="color: #000000;"></i>
                <i class="fa-solid fa-user" style="color: #000000;"></i>
                <i class="fa-solid fa-bars" style="color: #000000;"></i>

            </div>
        </div>
    </header>
<main>