<?php
/**
 * Template Name: Find Or Sell Our Beers
 *
 */

	get_header(); ?>
	<div id="find-our-beer">
      <div class="container y-paddings">
		<div class="post-content col-md-8 col-md-offset-2">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
				the_content(); 
				}
			}?>
		</div>
	</div>
      
      <div id="store-locator">
      <?php echo do_shortcode('[wpsl]'); ?>
      </div>
</div>
	<?php get_footer(); ?>