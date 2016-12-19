<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 */

get_header(); ?>
<div id="location-detail-content">
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