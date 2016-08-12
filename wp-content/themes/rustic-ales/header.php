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
  <link href="<?php echo get_template_directory_uri (); ?>/css/hover.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri (); ?>/css/custom.css" rel="stylesheet">
  </head>
  <body <?php body_class(); ?>>
  <header id="main-header">
    <div id="main-header-bg" style="background:url('<?php the_field("top_banner_image") ?>') no-repeat center center; background-size:cover">
    </div>
    <div class="container">
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
      <h1 id="banner-heading-text"><?php the_field('banner_heading_text'); ?></h1>
      <?php } ?>
        <div class="cleaner"></div>
    </div>
  </header>
    