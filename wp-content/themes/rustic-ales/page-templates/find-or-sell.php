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
                        <div class="learn-more-right-row">
                              <a class="drawn-underline view-more-link" href="/saras-cellar">Learn more ></a>
                        </div>
      		</div>
      		<div class="cleaner"></div>

      	</div>
      </div>

      <div id="wholesale-row" class="y-paddings">
      	<div class="container">
                  <div class="sub-title-row">
                        <h2 class="sub-title dark">Wholesale Orders</h2>
                  </div>
                  <div class="col-md-8 col-md-offset-2">
                        <?php the_field('wholesale_row_text'); ?>
                        <div class="learn-more-right-row">
                              <a class="drawn-underline view-more-link" href="#">Learn more ></a>
                        </div>
                  </div>
                  <div class="cleaner"></div>
      	</div>
      </div>
</div>
	<?php get_footer(); ?>