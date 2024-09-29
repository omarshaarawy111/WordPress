<?php /* this is footer which control how footer looks like in all pages of wordpress website and it is single source of truth
       * wp_footer() to add admin bar of wordpress as user of wordpress
       * the second step in your html code is the footer 
       * not every code needed to be in php instance totally unless wwe need to apply dynamic things 
       * add hyperlinks to menu through site_url function and just put slug in between paranthese except home page link just keep 		   it empty , donot forget echo for links to print the text refering to the links
        */

?>

<!DOCTYPE html>

<html>
<body>	
<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a>
            </h1>
            <p><a class="site-footer__link" href="#">555.555.5555</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
				   <?php
	/*
	
				wp_nav_menu(array(
				'theme_location' => 'footerLocationOne'
				
				
				));
	*/
				?>
			
				 
                <ul>
                  <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Campuses</a></li>
				  <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                </ul>
 				
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
				   <?php
	/*
				wp_nav_menu(array(
				'theme_location' => 'footerLocationTwo'
				
				
				));
	*/
				?>
				  
                <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="<?php echo site_url('/privacy-policy') ?>">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
				
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>