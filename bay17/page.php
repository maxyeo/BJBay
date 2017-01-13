<?php
/*
Template Name: Page
*/
?>
<?php get_header();?>
<section id="page">
    <div class="grid cf">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        	<?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>
<? get_footer(); ?>