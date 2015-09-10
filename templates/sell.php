<?php
/*
Template Name: Sell Template
*/
?>
<?php get_header();?>
<section id="sell-top" style="background-image: url(<?php the_field('background_image'); ?>)">
    <h1><?php the_title(); ?></h1>
</section>
<section id="sell-page">
    <div class="grid cf">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>
<? get_footer(); ?>