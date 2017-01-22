 
    <footer id="main-footer" class="y-paddings">
      <div class="container">
      	<div class="row">
      		<div class="col-md-4 footer-hours">
      			<h2 class="sub-title dark">Brewery and Taproom</h2>
            <div class="footer-hours-group">
            <h3>Location</h3>
            103 Kennedy Drive<br>
            Capitola, CA 95010
            </div>
      			<div class="footer-hours-group">
            <h3>Hours</h3>
      			<?php the_field('brewery_hours', 72); ?>
      			</div>
      		</div>
          <div class="col-md-4 footer-hours">
            <h2 class="sub-title dark">Midtown Portal</h2>
            <div class="footer-hours-group">
            <h3>Location</h3>
            123 Beer Street<br>
            Santa Cruz, CA 95060
            </div>
            <div class="footer-hours-group">
            <h3>Hours</h3>
            <?php the_field('taproom_hours', 72); ?>
            </div>
          </div>
      		<div class="col-md-4" id="footer-social">
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
  	<script src="<?php echo get_template_directory_uri (); ?>/js/snap.svg-min.js"></script>
  	<script src="<?php echo get_template_directory_uri (); ?>/js/modernizr.custom.js"></script>
  	<script src="<?php echo get_template_directory_uri (); ?>/js/classie.js"></script>
  	<script src="<?php echo get_template_directory_uri (); ?>/js/genie.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/js/jquery.cookie.js"></script>
    <?php if ( is_front_page() || is_page_template( 'page-templates/photo-gallery.php' )) { ?>
    <script src="<?php echo get_template_directory_uri (); ?>/js/instafeed.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/js/masonry.pkgd.min.js"></script>
    <?php } ?>
    <?php if ( is_page_template( 'page-templates/locations.php' )) { ?>
    <script>
      function initMap() {
        var uluru = {lat: <?php the_field('location_longitude');?>, lng: <?php the_field('location_latitude');?>};
        var map = new google.maps.Map(document.getElementById('location-map'), {
          zoom: 16,
          center: uluru,
          scrollwheel: false,
          navigationControl: false,
          mapTypeControl: false,
          scaleControl: false,
          draggable: false,
          styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        });
        
        var myIcon = new google.maps.MarkerImage("/images/red-dot-40.png", null, null, null, new google.maps.Size(20,20));

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon: myIcon,

        });
      }
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoB4OvUP5mHjZe_Lvdp6P3qKMnPXM3WWQ&callback=initMap">
    </script>
    <?php } ?>
    <script type="text/javascript">
      jQuery(function($) {
        
          $('#main-nav ul li.menu-item-has-children').on('mouseenter', function () {
          $(this).children('ul').fadeIn();  
          }).on('mouseleave', function () {
            $(this).children('ul').hide();
        });

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

        $('#wpsl-gmap').click(function(){
          locationInfobox();
          //setTimeout(locationInfobox, 100);
        });

        $('#contact-form-row select option[value=""]').text('');


      });
      function locationInfobox(){
      jQuery('.gm-style-iw').prev('div').addClass('location-infobox');
      jQuery('.gm-style-iw').next('div').addClass('close-infobox');
      };

      
    </script>
    <?php if ( is_front_page() || is_page_template( 'page-templates/photo-gallery.php' )) { ?>
    <script type="text/javascript">
    var foundImages = 0;
    var maxImages = 8;

    var userFeed = new Instafeed({
        get: 'user',
        userId: 1385476119,
        accessToken: '1385476119.5cac516.de6240d874374be8bbbb8928cbbd798d',
        target: 'instafeed',
        <?php if ( is_front_page()) { ?>
        filter: function(image) {
          return image.tags.indexOf('beers') >= 0;
        },
        <?php } else { ?>
        success: function() {
          foundImages = 0;
        },
        filter: function(image) {
          if (image.tags.indexOf('beers') >= 0 || foundImages > maxImages) {
            return false;
            alert(maxImages);
          } else {
             foundImages = foundImages + 1;
          }

          return true;
        },
        <?php } ?>
        <?php if ( is_front_page()) { ?>limit: 1,<?php } else { ?>limit: 60,<?php } ?>
        template: <?php if ( is_front_page()) { ?>'<img src="{{image}}" alt="What is on tap" />'<?php } else { ?>'<div class="instagram-item col-md-4"><img src="{{image}}" alt="{{caption}}" /></div>'<?php } ?>,
        resolution: 'standard_resolution',
        after: function() {
            jQuery('#instafeed').append('<div class="cleaner"></div>');
        },
    });
    userFeed.run();

    jQuery('#gallery-loop').masonry({
      // options
      itemSelector: '.gallery-item',
      transitionDuration: '0.8s'
    });

</script>
<?php } ?>
      
  </body>
</html>