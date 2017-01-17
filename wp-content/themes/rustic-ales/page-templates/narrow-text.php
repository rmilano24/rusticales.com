<?php
/**
 * Template Name: Narrow (Header Aligned) Text
 *
 */

get_header(); ?>
<div id="narrow-text">
	<div class="container y-paddings">
		<div class="post-content header-aligned col-md-8 col-md-offset-2">
			<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
				the_content(); 
				}
			}?>

			<div class="additional-text-content">
			<?php the_field('additional_text_below_larger_intro_text'); ?>
			</div>
		</div>
		
	</div>
</div>
  
<?php get_footer(); ?>