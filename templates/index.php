<?php
/*
Template Name: Buy Template
*/
?>
<?php get_header();?>
<section id="buy-top" style="background-image: url(<?php the_field('background_image', get_option('page_for_posts')); ?>">
    <h1><?php the_field('title', get_option('page_for_posts')); ?></h1>
</section>
<section id="buy-body">
    <div class="grid cf">
        <div class="col-3-16">
            <h3>Categories</h3>
            <nav>
                <?php wp_list_categories('orderby=name&title_li=&show_option_none='); ?>
            </nav>
        </div>
        <div id="products" class="col-13-16">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <a href="<?php the_permalink() ?>" class="col-1-3 product">
                    <div class="product-image" style="background-image: url(<?php the_field('image'); ?>)"></div>
                    <h4><?php the_title(); ?></h4>
                    <h5><?php the_field('price'); ?></h5>
                </a>
            <?php endwhile; ?>
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => '<i class="fa fa-chevron-left"></i><span>Previous</span>',
                'next_text' => '<span>Next</span><i class="fa fa-chevron-right"></i>',
                'screen_reader_text' => ' ',
            ) ); ?>
            <?php else : ?>
            <p><?php _e("The Bay can't find anything to match your request.  Send us a <a href=mailto:'bluejaybay@jhu.edu'>message</a>!"); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<? get_footer(); ?>