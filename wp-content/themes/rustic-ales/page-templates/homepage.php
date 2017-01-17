<?php
/**
 * Template Name: Homepage
 */

	get_header(); ?>
<div id="page-content-wrapper" class="y-paddings">
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

	<div id="homepage-beers" class="y-paddings">
		<div class="container">
			<div class="sub-title-row">
				<h2 class="sub-title dark">Our Beers</h2>
			</div>
			<div class="beers-content col-md-10 col-md-offset-1">
			<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					
					the_content();
				} // end while
			} // end if
			?>
			</div>
			<div class="cleaner"></div>
			<div id="homepage-beers-loop" class="y-paddings no-padding-bottom">
				<div class="row">
					 <?php
					 	$count = 0; 
				        $args = array(
				          'post_type' => 'the_beers',
				          'posts_per_page' => 30
				        );
				        $beers = new WP_Query( $args );
				        if( $beers->have_posts() ) {
				          while( $beers ->have_posts() ) {
				            $beers->the_post();
				            ?>
				             <?php $image = get_field('beer_logo');
				             $selected = get_field('include_in_homepage_beers');
       							if( !empty($image) && $selected ): ?>
				           		<div class="one-fifth-column beer-item">
					           		<a class="display-table" href="<?php the_permalink(); ?>">
					           			<span class="display-cell">
				           				<?php 
				           				$showTitle = get_field('show_title_with_logo');
		       							if( $showTitle) { ?>
		       								<?php if (get_field('show_title_above_or_below_logo') == 'Above') { ?>
		       									<p class="title-above-logo"><?php the_title(); ?></p>
		       								<?php } ?>
		       								
		       								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		       								<?php if (get_field('show_title_above_or_below_logo') == 'Below') { ?>
		       									<p class="title-below-logo"><?php the_title(); ?></p>
		       								<?php } ?>
		       							<?php } else { ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php } ?>
									<!--<div class="overlay"></div>-->
									</span>
					           		</a>
				          		</div>
				          	<?php $count++; ?>	
				           	<?php endif; ?>
				            <?php
				          }
				        }
				      ?>
				     <?php wp_reset_query(); ?> 
				</div>
				<div id="view-all-beers-row" class="view-all-row">
				<a class="drawn-underline view-more-link" href="<?php echo get_page_link(12); ?>">View all beers ></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="homepage-on-tap">
	<div class="container">
		<div class="sub-title-row">
			<h2 class="sub-title dark">What's On Tap</h2>
		</div>
			<div id="instafeed">
			</div>
	</div>
</div>
<div id="homepage-photos" class="y-paddings">
	<div class="container">
	<div class="sub-title-row">
		<h2 class="sub-title dark">Photo Gallery</h2>
	</div>
	<div class="row" id="gallery-loop">
		
		 <?php 
	        $args = array(
	          'post_type' => 'photos',
	          'posts_per_page' => 80
	        );
        $gallery_items = new WP_Query( $args );
        if( $gallery_items->have_posts() ) {
          while( $gallery_items ->have_posts() ) {
            $gallery_items->the_post();
            ?>
             <div class="gallery-item">
	            <?php $image = get_field('gallery_item_image');
		        if( !empty($image) ): ?>
		            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
		        <?php endif; ?>
	        </div>
            <?php
          }
        }
        else {
          echo 'There are currently no gallery images.';
        }
      ?>
     <?php wp_reset_query(); ?> 
	</div>
			<div id="view-all-photos-row" class="view-all-row">
				<a class="drawn-underline view-more-link" href="/photo-gallery">View more ></a>
			</div>
	</div>
</div>   

      
	<?php get_footer(); ?>