
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
    <div id="age-verification">
      <div class="container y-paddings">
      <h1>Are you over 21 years of age?</h1>
      <a href="#" id="close-verification">Yes</a>
      <a href="https://www.google.com/search?q=legos&hl=en&biw=1291&bih=1316&site=webhp&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi59ff6zMnOAhXCGR4KHePZDQcQ_AUIBygC">No</a>
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
  <script src="<?php echo get_template_directory_uri (); ?>/js/jquery.hoverdir.js"></script>
	<script src="<?php echo get_template_directory_uri (); ?>/js/snap.svg-min.js"></script>
  	<script src="<?php echo get_template_directory_uri (); ?>/js/modernizr.custom.js"></script>
  	<script src="<?php echo get_template_directory_uri (); ?>/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri (); ?>/js/genie.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/js/jquery.cookie.js"></script>
    <script type="text/javascript">
      jQuery(function($) {
        
        // Directional Hover Effects
        $(' .beer-item ').each( function() { $(this).hoverdir(); } );

        // Animated hamburger menu - toggle class
        $('.hamburger').click(function(){
          $(this).toggleClass('is-active');
        });

        // Age Verification Redirect
        var verificationPage = "http://localhost:8888/age-verification/";
        var cookieValue = $.cookie('noShowWelcome');
        var beforeRedirect = window.location.href;
        if (window.location.href != verificationPage) {
          if (cookieValue) {
            $('#age-verification').hide();
          }
        }

        // Age Verification Set Cookie when "Yes" button is clicked and redirect to homepage
        $('#close-verification').click(function(){
          $.cookie('noShowWelcome', 'true', { path: '/' });
          $('#age-verification').hide();
        });

      });
  

  
    </script>
  </body>
</html>