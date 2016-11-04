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

      <div id="saras-cellar-row" class="y-paddings">
      	<div class="container">
      		<div class="sub-title-row">
      			<h2 class="sub-title dark">Sara's Cellar</h2>
      		</div>
      		<div class="col-md-6 left-col">
      			<img src="/images/saras-cellar.png" alt="SARA's Cellar" />
      		</div>
      		<div class="col-md-6 right-col">
      			<?php the_field('saras_cellar_text'); ?>
      		</div>
      		<div class="cleaner"></div>

      	</div>
      </div>

      <div id="wholesale-row">
      	<div class="container">

      	</div>
      </div>
</div>
	<?php get_footer(); ?>