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
      	<div class="show-tablet show-mobile header-wrapper">
      		<h1 class="sub-title yellow"><?php the_title(); ?></h1>
      	</div>
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
    	<div class="container y-paddings no-padding-top">
    	<div class="sub-title-row">
    	<h2 class="sub-title dark">More Beers</h2>
    	</div>

    <?php /*
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
	<?php $image = get_field('beer_logo');
	if( !empty($image) ): ?>
	<div class="one-fifth-column beer-item">
		<a class="display-table" href="<?php the_permalink(); ?>">
			<span class="display-cell">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<!--<div class="overlay"></div>-->
		</span>
		</a>
	</div>
	<?php endif; ?>
	<?php
		}
		}
		}
		$post = $orig_post;
		wp_reset_query(); */?>

		<?php 
 
// get the custom post type's taxonomy terms
 
$custom_taxterms = wp_get_object_terms( $post->ID, 'beer_categories', array('fields' => 'ids') );
// arguments
$args = array(
'post_type' => 'the_beers',
'post_status' => 'publish',
'posts_per_page' => 16,
'orderby' => 'rand',
'tax_query' => array(
    array(
        'taxonomy' => 'beer_categories',
        'field' => 'id',
        'terms' => $custom_taxterms
    )
),
'post__not_in' => array ($post->ID),
);
$related_items = new WP_Query( $args );
// loop over query
if ($related_items->have_posts()) :
while ( $related_items->have_posts() ) : $related_items->the_post();
?>
    <?php $image = get_field('beer_logo');
	if( !empty($image) ): ?>
	<div class="one-fifth-column beer-item">
		<a class="display-table" href="<?php the_permalink(); ?>">
			<span class="display-cell">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<!--<div class="overlay"></div>-->
		</span>
		</a>
	</div>
	<?php endif; ?>
<?php
endwhile;
endif;
// Reset Post Data
wp_reset_postdata();
?>
		<div class="cleaner"></div>
		<div id="view-all-beers-row" class="view-all-row">
				<a class="drawn-underline view-more-link" href="beer-labels">View all beers ></a>
		</div>
    	</div>
    </div>
    <?php
    		} // end while
		} // end if
	?>

	<?php get_footer(); ?>