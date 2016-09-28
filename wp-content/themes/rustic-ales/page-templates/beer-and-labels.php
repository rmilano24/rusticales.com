<?php
/**
 * Template Name: Beer & Labels
 *
 */

	get_header(); ?>
<div id="beer-and-labels-the-content">
	<div class="container y-paddings">
		<div class="post-content">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
				the_content(); 
				}
			}?>
		</div>
	</div>
	<?php 
$show_these_categories = array();
 
$taxonomy     = 'beer_categories';
$orderby      = 'ASC'; 
$show_count   = false;
$pad_counts   = false;
$hierarchical = false;
$title        = '';
 
$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);

$beer_cats = get_terms($args);
foreach($beer_cats as $beer_cat) {
	$cat_id = reset($beer_cat);
	array_push($show_these_categories,$cat_id);
}
unset($beer_cat);
?>

<div id="beer-categories-filters">
<h2 class="sub-title yellow">Our Beers</h2>
		 <ul id="the_beer_filters" class="list-inline col-md-10 col-md-offset-1">
			<?php foreach ($show_these_categories as $cat_value) { ?>
				<li>
					<a id="beer-cat-filter-<?php echo $cat_value ?>">
						<?php echo get_cat_name($cat_value); ?>
					</a>
				</li>
			<?php } ?>
				<li class="active"><a id="beer-cat-filter-all" >All Beers</a></li>
		</ul>
		<div class="cleaner"></div>
 </div>
</div>	
<div id="beer-and-labels-below-the-content">
	<div class="container y-paddings">


 



	<?php foreach ($show_these_categories as $cat_value) { ?>

		<div class="beer-category-group" id="beer-cat-<?php echo $cat_value ?>">
	<div class="sub-title-wrapper">
	<h2 class="sub-title dark"><?php echo get_cat_name($cat_value); ?></h2>
	</div>
		<div class="beer-category-loop">
		<?php
		 	$count = 0; 
	        $args = array(
	          'post_type' => 'the_beers',
	          'posts_per_page' => 99999,
	          'tax_query' => array(
				array(
					'taxonomy' => 'beer_categories',
					'field'    => 'term_id',
					'terms'    => $cat_value,
				),
			),
	        );
	        $beers = new WP_Query( $args ); 
	        if( $beers->have_posts() ) {
	          while( $beers ->have_posts() ) {
	            $beers->the_post();
	            ?>
	             <?php $image = get_field('beer_logo');
						if( !empty($image) ): ?>
	           		<div class="one-fifth-column beer-item">
		           		<a class="display-table" href="<?php the_permalink(); ?>">
		           			<span class="display-cell">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<div class="overlay"></div>
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
	     <div class="cleaner"></div> 
     	</div>
     </div>

	<?php } 
	unset($cat_value);
	?>


<!-- End beer categories -->
	</div>
</div>
      
      
	<?php get_footer(); ?>