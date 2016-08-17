
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
      
        $(' .beer-item ').each( function() { $(this).hoverdir(); } );

        $('.hamburger').click(function(){
          $(this).toggleClass('is-active');
        });

     
        var verificationPage = "http://localhost:8888/age-verification/";
        var cookieValue = $.cookie('noShowWelcome');
        var cookieValueType = jQuery.type(cookieValue)
        if (window.location.href != verificationPage) {
          if (cookieValue != 'true') {
               window.location.replace(verificationPage);
          }
        }

        $('#close-verification').click(function(){
          $.cookie('noShowWelcome', 'true', { path: '/' });
          window.location.replace('/');   
        });

      });
  

  
    </script>
  </body>
</html>