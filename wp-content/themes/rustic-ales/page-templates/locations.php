<?php
/**
 * Template Name: Location Detail
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

			<div class="row clearfix" id="location-hours-and-address">
				<div class="col-md-4">
					<p class="location-address">
					<h2>Location</h2>
					<?php the_field('location_address'); ?>
					</p>
				</div>
				<div class="col-md-8">
					<p class="location-hours">
					<h2>Hours</h2>
					<?php the_field('location_hours'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="location-map">
	</div>
	<div id="other-locations" class="y-paddings">
		<div class="container">
			<div class="sub-title-wrapper">
				<h2 class="sub-title dark transparent"><?php the_field('other_location_row_heading'); ?></h2>
				
			</div>
			<div id="hover-locations">
					<div id="hover-locations-row" class="clearfix">

						<div class="three-fifths hover-location">
							<div class="interior">
							 <?php $image = get_field('other_location_map_image');
						    if( !empty($image) ): ?>
						        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						    <?php endif; ?>
							<a href="<?php the_field('other_location_page_url'); ?>" class="display-table">
								<span class="display-cell">
								<h3><?php the_field('other_location_title'); ?></h3>
								<h4><?php the_field('other_location_city'); ?></h4>
								</span>
							</a>
							</div>
						</div>
					
					</div>
					<div class="cleaner"></div>
				</div>
		</div>
	</div>
</div>
 
	<?php get_footer(); ?>