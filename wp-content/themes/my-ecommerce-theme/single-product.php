<?php get_header(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">


<div class="feature_cart_items">

        <div class="product-card">

            <span class="badge">NEW</span>
            <span class="heart"><i class="fa-regular fa-heart" style="color: #000000;"></i></span>

            <img src="http://daehan-fresh-mart.test/wp-content/uploads/2025/12/cabbage-removebg-preview1.png" alt="Cabbage">

            <p class="category">Vegetable <span class="rating"><i class="fa-solid fa-star" style="color: #f5c211;"></i>4.00</span></p>

            <h3 class="title">Cabbage</h3>
            <p class="stock">In stock : 50/100</p>

            <div class="price">

               <span class="current">$5.00</span>
               <span class="weight">250g</span>
            </div>

            <div class="qty">
               <button><i class="fa-solid fa-minus" style="color: #000000;"></i></button>
               <span>2</span>
               <button class="plus"><i class="fa-solid fa-plus" style="color: #000000;"></i></button>
            </div>

            <div class="actions">
               <button class="buy">BUY NOW</button>
               <button class="add"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>Add</button>
            </div>
        </div>

</div>

<?php $price=get_post_meta(get_the_ID(),'_price',true); $stock=get_post_meta(get_the_ID(),'_stock',true); ?>
<h1><?php the_title(); ?></h1>
<div class="product-single">
<div><?php the_post_thumbnail('large'); ?></div>
<div>
<p><strong>Price:</strong> $<?php echo $price; ?></p>
<p><strong>Stock:</strong> <?php echo $stock; ?></p>
<?php the_content(); ?>
</div>
</div>





<?php get_footer(); ?>