<?php
/*
Template Name: List of Products Template
*/
?>
<?php get_header();?>
<section id="products-top" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/bg1.jpg)">
</section>
<section id="products-woo">
    <div class="grid cf">
        <?php woocommerce_content(); ?>
    </div>
</section>
<? get_footer(); ?>