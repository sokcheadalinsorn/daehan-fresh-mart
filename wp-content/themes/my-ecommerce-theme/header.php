<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" herf="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header_top">
        <!-- logo -->
         <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
            </a>
         </div>

        <!-- search -->
        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

            <input 
              type="search"
              class="search-field"
              placeholder="Search..."
              value="<?php echo get_search_query(); ?>"
              name="s"
            >
            <button type="submit" class="search-submit"><span><i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i></span></button>
        </form>
  
        <!-- navigation menu -->
        <div class="icon">
            <a href="#" class="icon"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a>
            <a href="#" class="icon"><i class="fa-solid fa-bell" style="color: #000000;"></i></a>
            <a href="#" class="icon"><i class="fa-solid fa-user" style="color: #000000;"></i></a>
            <a href="#" class="icon"><i class="fa-solid fa-bars" style="color: #000000;"></i></a>
        </div>
    </div>

    <!-- Navigation -->
     <div class="nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
     </div>

    <!-- hero_section -->
    <div class="hero_section">
        <div class="content">
            <h1>Surper</h1>
            <h2>Market</h2>
            <h3>High Quality Products</h3>
            <p?>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="hero_pic">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero_pic.png" alt="Hero Image">
        </div>
    </div>

    <!-- categories_section -->
    <div class="categories_title">
        <h2>Categories</h2> 
        <p class="view_more">View more</p> 
    </div>

    <!-- categories-cart_products -->
    <div class="categories">
        <div class="cotegories_cart">
            <div class="categories_pic">
                <img src="<?php echo get_template_directory_uri(); ?>/images/root.png" alt="categories ">
            </div>
            <p class="name_fruit">Beet root</p>
        </div>
        
        <div class="cotegories_cart">
            <div class="categories_pic">
                <img src="<?php echo get_template_directory_uri(); ?>/images/root.png" alt="categories ">
            </div>
            <p class="name_fruit">Beet root</p>
        </div>

        <div class="cotegories_cart">
            <div class="categories_pic">
                <img src="<?php echo get_template_directory_uri(); ?>/images/root.png" alt="categories ">
            </div>
            <p class="name_fruit">Beet root</p>
        </div>

        <div class="cotegories_cart">
            <div class="categories_pic">
                <img src="<?php echo get_template_directory_uri(); ?>/images/root.png" alt="categories ">
            </div>
            <p class="name_fruit">Beet root</p>
        </div>
        

    </div>
     
   
  

</header>
<main>


