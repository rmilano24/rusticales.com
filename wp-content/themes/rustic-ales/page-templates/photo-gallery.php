<?php
/**
 * Template Name: Photo Gallery
 *
 */

get_header(); ?>


<div id="homepage-photos" class="y-paddings">
  <div class="container">
    <div class="sub-title-row">
        <h2 class="sub-title dark">Brewery &amp; Tasting Room</h2>
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
                 <div class="col-md-4 gallery-item">
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
  </div>
</div>



<div id="instagram-feed">
      <div class="container y-paddings no-padding-top">
        <div class="row">
            <div class="sub-title-row">
                <h2 class="sub-title dark">Instagram Feed</h2>
            </div>
            <div id="instafeed">
            </div>
            <div class="learn-more-right-row">
                  <a class="drawn-underline view-more-link" href="https://www.instagram.com/rusticales/" target="_blank">View more ></a>
            </div>
        </div>
      </div>
</div>
<?php get_footer(); ?>