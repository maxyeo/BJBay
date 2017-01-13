<?php
/* Template Name: Single Post Template */
get_header();?>
<section id="item">
    <h1><?php the_title(); ?></h1>
    <div class="grid cf">
        <div class="col-1-2 item-image">
            <img src="<?php the_field('image'); ?>">
        </div>
        <div class="col-1-2 item-info">
            <h3><?php the_field('price'); ?></h3>
            <p><?php the_field('description'); ?></p>
        </div>
    </div>
    <div id="buy-form" class="grid cf">
        <h2>Request the Item!</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>
<? get_footer(); ?>