<?php
/**
 * Template Name: Contact
 *
 */

get_header(); ?>
<div id="contact">
	<div class="container y-paddings clearfix">
		<div class="post-content header-aligned col-md-8 col-md-offset-2">
			<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
				the_content(); 
				}
			}?>

			
		</div>
		<div class="cleaner"></div>
	</div>

	<div id="hover-locations" class="large-container">
		<div class="sub-title-row">
			<h2 class="sub-title yellow">Visit Us</h2>
		</div>
		<div id="hover-locations-row" class="clearfix">
			<div class="col-md-6 hover-location brewery-location">
				<div class="interior">
				<img class="map-image" src="/images/capitola-map.jpg" alt="Map view of Sante Adairius Brewery's Capitola Location" />
				<a href="<?php echo get_page_link(84); ?>" class="display-table">
						<span class="display-cell">
						<h3>Brewery and Taproom</h3>
						<h4>Capitola</h4>
						</span>
				</a>
				</div>
			</div>

			<div class="col-md-6 hover-location taproom-location">
				<div class="interior">
				<img class="map-image" src="/images/taproom-map.jpg" alt="Map view of Sante Adairius Brewery's Santa Cruz Taproom Location" />
				<a href="<?php echo get_page_link(90); ?>" class="display-table">
					<span class="display-cell">
					<h3>Midtown Portal</h3>
					<h4>Santa Cruz</h4>
					</span>
				</a>
				</div>
			</div>
		
		</div>
		<div class="cleaner"></div>
	</div>
	<div class="container y-paddings clearfix" id="contact-form-row">
		<div class="col-md-8 col-md-offset-2 narrowed-container">
		<h2 class="sub-title dark">Contact Us</h2>
		<div class="extra-content">
			<?php the_field('additional_text_below_larger_intro_text'); ?>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="239" title="Contact form 1"]'); ?>
		</div>
	</div>

</div>
  
<?php get_footer(); ?>