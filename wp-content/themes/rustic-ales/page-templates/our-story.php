<?php
/**
 * Template Name: Our Story
 *
 */

	get_header(); ?>
<div id="our-story">
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
		<div class="cleaner"></div>
		<div clas="row clearfix" id="our-story-content-row">
			<div class="left-col">
				<?php $image = get_field('left_column_image');
			    if( !empty($image) ): ?>
			        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />         
			    <?php endif; ?>
			</div>
			<div class="right-col">
				<div class="text-wrapper">
				<?php the_field('right_column_text'); ?>
				</div>	
				<div class="link-wrapper">
					<a href="<?php the_field('bottom_link_url'); ?>" class="drawn-underline view-more-link"><?php the_field('bottom_link_text'); ?></a>
				</div>
			</div>
		</div>
	</div>
	
</div>
 
	<?php get_footer(); ?>