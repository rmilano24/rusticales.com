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
				<a href="https://www.google.com/maps/dir/''/sante+adairius+brewery/data=!4m5!4m4!1m0!1m2!1m1!1s0x808e157784d6c595:0x641ad47ecfc90f5e?sa=X&ved=0ahUKEwis3L7-z7rOAhXFRiYKHdtlDZoQ9RcIjQEwCw" target="_blank" class="display-table">
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
				<a href="https://www.google.com/maps/place/Water+at+Morrissey/@36.9814638,-122.0075053,15z/data=!4m2!3m1!1s0x0:0xbfa1ad9188a92d0b?sa=X&ved=0ahUKEwjKmNDU0LrOAhUCOCYKHXYqDdsQ_BIIdzAK" class="display-table" target="_blank">
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
	<div class="container clearfix" id="contact-form-row">
		<div class="col-md-8 col-md-offset-2 narrowed-container">

		</div>
	</div>

</div>
  
<?php get_footer(); ?>