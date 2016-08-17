<?php
/**
 * Template for displaying beer detail
 *
 */

	get_header(); ?>
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
	?>
	<div id="beer-details-row">
	<div class="container y-paddings" id="beer-single-content">
      <div class="row">
	      <div class="col-md-3" id="beer-single-left">
	      	<?php $image = get_field('beer_bottle_image');
	        if( !empty($image) ): ?>
	            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	        <?php endif; ?>
	      </div>
	      <div class="col-md-9" id="beer-single-right">
	      	<h1 class="sub-title yellow"><?php the_title(); ?></h1>
      		<ul id="beer-specs" class="list-inline">
      			<?php if( get_field('style_of_beer') ) { ?>
      			<li><span class="spec-title">Style: </span><?php the_field('style_of_beer'); ?></li>
      			<?php } ?>
      			<?php if( get_field('abv') ) { ?>
      			<li><span class="spec-title">ABV: </span><?php the_field('abv'); ?></li>
      			<?php } ?>
      			<?php if( get_field('tasting_notes') ) { ?>
      			<li><span class="spec-title">Notes: </span><?php the_field('tasting_notes'); ?></li>
      			<?php } ?>
      		</ul>
      		<div id="beer-single-description">
				<?php the_content(); ?>
      		</div>
	      </div>
	      <div class="cleaner"></div>
      </div><!-- /.row -->
    </div>
    </div>

    <div id="more-beers-row">
    	<div class="container y-paddings">
    	<div class="sub-title-row">
    	<h2 class="sub-title dark">More Beers</h2>
    	</div>

    <?php 
	$orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);
	if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	$args=array(
	'post_type' => 'the_beers',
	'category__in' => $category_ids,
	'post__not_in' => array($post->ID),
	'posts_per_page'=> 15
	);
	$my_query = new wp_query( $args );
	if( $my_query->have_posts() ) {
	while( $my_query->have_posts() ) {
	$my_query->the_post();?>
	<div class="one-fifth-column">

	</div>
	<?php
		}
		}
		}
		$post = $orig_post;
		wp_reset_query(); ?>
    	</div>
    </div>
    <?php
    		} // end while
		} // end if
	?>

	<?php get_footer(); ?>