<?php
/**
 * Template Name: SARAs Cellar
 *
 */

	get_header(); ?>
<div id="saras-cellar">
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
		<div class="post-content sub-content col-md-7 col-md-offset-2">
		<?php the_field('smaller_text_content'); ?>
		</div>
		<div class="col-md-3" id="saras-cellar-logo">
		<img src="/images/saras-cellar/saras-cellar.png" alt="SARA's Cellar Logo" />
		</div>
		<div class="cleaner"></div>
		<div id="bottles-image">
			 <?php $image = get_field('bottom_image');
		    if( !empty($image) ): ?>
		        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />         
		    <?php endif; ?>
		</div>
	</div>
	
</div>
 
	<?php get_footer(); ?>