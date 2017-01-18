<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<?php
	  /*
	   * We add some JavaScript to pages with the comment form
	   * to support sites with threaded comments (when in use).
	   */
	  if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	  /*
	   * Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head(); 
    ?>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/css/genie.css" />
    
  <!--<link href="<?php echo get_template_directory_uri (); ?>/css/hover.css" rel="stylesheet"> -->
   <link href="<?php echo get_template_directory_uri (); ?>/css/hamburgers.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri (); ?>/css/custom.css" rel="stylesheet">
  </head>
  <body <?php body_class(); ?>>

  <div class="overlay overlay-genie" data-steps="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z;m 698.9986,728.03569 41.23353,0 -3.41953,77.8735 -34.98557,0 z;m 687.08153,513.78234 53.1506,0 C 738.0505,683.9161 737.86917,503.34193 737.27015,806 l -35.90067,0 c -7.82727,-276.34892 -2.06916,-72.79261 -14.28795,-292.21766 z;m 403.87105,257.94772 566.31246,2.93091 C 923.38284,513.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 455.17312,480.07689 403.87105,257.94772 z;M 51.871052,165.94772 1362.1835,168.87863 C 1171.3828,653.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 31.173122,513.78234 51.871052,165.94772 z;m 52,26 1364,4 c -12.8007,666.9037 -273.2644,483.78234 -322.7299,776 l -633.90062,0 C 359.32034,432.49318 -6.6979288,733.83462 52,26 z;m 0,0 1439.999975,0 0,805.99999 -1439.999975,0 z">
      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 806" preserveAspectRatio="none">
        <path class="overlay-path" d="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z"/>
      </svg>
      <!--<button type="button" class="overlay-close">Close</button>-->
      <nav>
       <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
      </nav>
    </div>

  <header id="main-header">
    <div id="main-header-bg" style="background:url('<?php the_field("top_banner_image") ?>') no-repeat center top; background-size:cover">
    </div>
    <div id="mobile-header">
      <div class="container">
        <div class="row">
        <div id="mobile-header-logo" class="col-md-6">
          <a href="/">
            <img src="/images/rustic-ales-logo.png" alt="Rustic Ales Beer">
          </a>
        </div>
        <div class="col-md-6" id="favicon-container">
          <button class="hamburger hamburger--stand">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>  
        </div>
        <div class="cleaner"></div>
        </div>
      </div>
    </div>
    <div class="container" id="page-top-banner-wrapper" style="background:url('<?php the_field("top_banner_image") ?>') no-repeat center top; background-size:cover">
      <div id="header-logo-menu">
        <div id="logo-container">
          <a href="/">
            <img src="/images/rustic-ales-logo.png" alt="Rustic Ales Beer">
          </a>
        </div>
        <nav id="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
        </nav>
      </div>


      <?php if( get_field('banner_heading_text') ) { ?>
      <h1 id="banner-heading-text">
      <?php
      global $post;     // if outside the loop
      if ( is_page() && $post->post_parent ) { ?>
        <span class="sub-title yellow child-page-header">
          <?php 
          $current = $post->ID;
          $parent = $post->post_parent;
          $grandparent_get = get_post($parent);
          $grandparent = $grandparent_get->post_parent;
          ?>
    <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>
            </span><br>
        <?php } 
        ?>
      <?php the_field('banner_heading_text'); ?></h1>
      <?php } ?>
        <div class="cleaner"></div>
    </div>
  </header>
    