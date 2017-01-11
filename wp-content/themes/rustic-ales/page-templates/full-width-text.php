<?php
/**
 * Template Name: Full Width - Basic Text
 *
 */

get_header(); ?>
<div id="basic-text">
	<div class="container y-paddings">
		<div class="post-content">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
				the_content(); 
				}
			}?>
		</div>
	</div>
</div>
  
<?php get_footer(); ?>