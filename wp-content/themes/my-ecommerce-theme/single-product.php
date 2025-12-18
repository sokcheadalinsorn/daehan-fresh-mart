<?php get_header(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">




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
<div class="info_detail">
   
</div>




<?php get_footer(); ?>