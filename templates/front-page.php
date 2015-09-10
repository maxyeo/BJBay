<?php get_header();?>
<section id="about" style="background-image: url(<?php the_field('splash_image'); ?>);">
	<div id="filter">
		<h2><?php the_field('splash_title'); ?></h2>
		<h3><?php the_field('splash_subtitle'); ?></h3>
		<p><?php the_field('splash_description'); ?></p>
		<div id="call-to-action">
			<a href="browse" class="blue">Browse the Bay</a>
			<a href="sell" class="gray">Sell to the Bay</a>
		</div>
	</div>
</section>
<section id="featured">
	<h2>Featured Items</h2>
	<div id="slide-show-arrows">
		<i id="prev-featured" class="fa fa-chevron-left"></i>
		<i id="next-featured" class="fa fa-chevron-right"></i>
	</div>
	<div class="cycle-slideshow"
		data-cycle-fx=fade
		data-cycle-timeout=6000
		data-cycle-swipe=true
		data-cycle-slides="> div"
		data-cycle-pager="#custom-pager"
		data-cycle-pager-template="<span></span>"
		data-cycle-prev="#prev-featured"
		data-cycle-next="#next-featured"
		>
		<?php 
		$posts = get_field('featured');
		if( $posts ): ?>
			<?php $count = 0; ?>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<?php if (0 == $count%2) { ?>
				<div class="featured">
					<div class="grid cf">
						<div class="col-1-2 featured-image" style="background-image: url(<?php the_field('image'); ?>);"></div>
						<div class="col-1-2 featured-text cf">
							<h3><?php the_title(); ?></h3>
							<p class="description"><?php echo wp_trim_words(get_field('description'), 55, '...'); ?></p>
							<p class="price"><?php the_field('price'); ?></p>
							<a href="<?php the_permalink() ?>" >Purchase</a>
						</div>
					</div>
				</div>
				<?php } else { ?>
				<div class="featured right">
					<div class="grid cf">
						<div class="col-1-2 featured-text cf">
							<h3><?php the_title(); ?></h3>
							<p class="description"><?php echo wp_trim_words(get_field('description'), 55, '...'); ?></p>
							<p class="price"><?php the_field('price'); ?></p>
							<a href="<?php the_permalink() ?>" >Purchase</a>
						</div>
						<div class="col-1-2 featured-image" style="background-image: url(<?php the_field('image'); ?>);"></div>
					</div>
				</div>
				<?php } ?>
				<?php $count++; ?>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>
	<div id="custom-pager" class="center"></div>
</section>
<section id="eco" style="background-image: url(<?php the_field('bridge_image'); ?>)">
	<div id="wrapper">
		<h2><?php the_field('bridge_title'); ?></h2>
		<p><?php the_field('bridge_description'); ?></p>
	</div>
</section>
<section id="hopkins">
	<div class="grid cf">
		<h2>Created by <span>Hopkins Students</span> for <span>Hopkins Students</span></h2>
		<p class="col-8-16 push-4"><?php the_field('section_description'); ?></p>
		<div id="sponsors">
			<a href="<?php the_field('section_link_1'); ?>"><img src="<?php the_field('section_link_1_image'); ?>"></a>
			<a href="<?php the_field('section_link_2'); ?>"><img src="<?php the_field('section_link_2_image'); ?>"></a>
		</div>
		<h3>@jhu.edu email <span>required</span></h3>
	</div>
</section>
<? get_footer(); ?>