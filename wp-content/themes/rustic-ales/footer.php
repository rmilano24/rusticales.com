 
    <footer id="main-footer" class="y-paddings">
      <div class="container">
      	<div class="row">
      		<div class="col-md-3" id="footer-hours">
      			<h2 class="sub-title dark">Hours</h2>
      			<div class="footer-hours-group">
      			<h3 class="hours-location">Brewery</h3>
      			<?php the_field('brewery_hours', 72); ?>
      			</div>
      			<div class="footer-hours-group">
      			<h3 class="hours-location">Taproom</h3>
      			<?php the_field('taproom_hours', 72); ?>
      			</div>
      		</div>
      		<div class="col-md-3" id="footer-social">
      			<h2 class="sub-title dark">Get In Touch</h2>
      			<div class="footer-social-group">
      				<ul class="list-inline">
      					<li><a href="https://www.facebook.com/rusticales/" target="_blank"><img src="/images/icons/facebook-footer.png" alt="Facebook"></a></li>
      					<li><a href="https://www.instagram.com/rusticales/" target="_blank"><img src="/images/icons/instagram-footer.png" alt="Facebook"></a></li>
      					<li><a href="#"><img src="/images/icons/email-footer.png" alt="Facebook"></a></li>
      				</ul>
      			</div>
      		</div>
      		<div class="cleaner"></div>
      	</div>
      </div>
    </footer>
    <div id="age-verification" style="display:none;">
      <div class="container">
      <div id="age-verification-logo">
      <img src="/images/sara-logo-lrg.png" alt="Sante Adairius Rustic Ales Logo" >
      </div>
      <h2>Are you over 21?</h2>
      <a href="#" id="close-verification">Yes</a>
      <a id="underage" href="https://www.google.com/search?q=legos&hl=en&biw=1291&bih=1316&site=webhp&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi59ff6zMnOAhXCGR4KHePZDQcQ_AUIBygC">No, get me away from here.</a>
      </div>
      </div>
    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>
    <!--<script src="<?php echo get_template_directory_uri (); ?>/js/jquery.hoverdir.js"></script>-->
  	<script src="<?php echo get_template_directory_uri (); ?>/js/snap.svg-min.js"></script>
  	<script src="<?php echo get_template_directory_uri (); ?>/js/modernizr.custom.js"></script>
  	<script src="<?php echo get_template_directory_uri (); ?>/js/classie.js"></script>
  	<script src="<?php echo get_template_directory_uri (); ?>/js/genie.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/js/jquery.cookie.js"></script>
    <?php if ( is_front_page() ) { ?>
    <script src="<?php echo get_template_directory_uri (); ?>/js/instafeed.js"></script>
    <?php } ?>
    <script type="text/javascript">
      jQuery(function($) {
        
          $('#main-nav ul li.menu-item-has-children').on('mouseenter', function () {
          $(this).children('ul').fadeIn();  
          }).on('mouseleave', function () {
            $(this).children('ul').delay(200).fadeOut();
        });

        // Directional Hover Effects
        $(' .beer-item ').each( function() { $(this).hoverdir(); } );

        // Animated hamburger menu - toggle class
        $('.hamburger').click(function(){
          $(this).toggleClass('is-active');
        });

        // Age Verification Redirect
        var cookieValue = $.cookie('noShowWelcome');
        if (cookieValue) {
          $('#age-verification').hide();
        } else {
          $('#age-verification').show();
        }


        // Age Verification Set Cookie when "Yes" button is clicked and redirect to homepage
        $('#close-verification').click(function(){
          $.cookie('noShowWelcome', 'true', { path: '/' });
          $('#age-verification').hide();
        });

        
        $('#the_beer_filters li a').click(function(){
          // Add class .active on beer filter items when clicked and remove class from all others.
          $('#the_beer_filters li').removeClass('active');
          $(this).parent('li').addClass('active');

          // Hide all beer categories not related to this filter item and only show the one(s) that is/are.

            //Get ID of filter item to match that of category
            var filter_id = $(this).attr('id').replace('beer-cat-filter-','');
            if(filter_id == 'all') {
              $('.beer-category-group').show();
              $('.beer-category-group .sub-title-wrapper').show();
            } else {
            $('.beer-category-group').each(function(){
              $('.beer-category-group .sub-title-wrapper').hide();
              if($(this).attr('id') == 'beer-cat-'+filter_id ) {
                $(this).show();
              } else {
                $(this).hide();
              }

            });
          }
        });



      });
      function locationInfobox(){
      jQuery('.wpsl-info-window').parent('div').addClass('location-infobox');
      };
      setTimeout(locationInfobox, 10000);
    </script>
    <?php if ( is_front_page() ) { ?>
    <script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 1385476119,
        accessToken: '1385476119.5cac516.de6240d874374be8bbbb8928cbbd798d',
        target: 'instafeed',
        limit: 1,
        template: '<img src="{{image}}" alt="What is on tap" />',
        resolution: 'standard_resolution'
    });
    userFeed.run();
</script>
<?php } ?>
      
  </body>
</html>