<?php /* this is header which control how header looks like in all pages of wordpress website  and it is single source of truth
       * <!DOCTYPE html>  is a declaration at the beginning of an HTML document that specifies the document type and version of              HTML being used
       * wp_head(); to let wordpress to control head and has final say so that plugins can also control
	   * when you start with your custom theme always start with header wich means nav bar + logo
	   * we gonna make parsing with our html code
	   * add hyperlinks to menu through site_url function and just put slug in between paranthese except home page link just keep 		   it empty , donot forget echo for links to print the text refering to the links
	   * lets make website responsiveness so we jump to the head section and add view port meta tag
	   * we create meta attribute of view port settings making browsers and devices be true themselves using their own native 	`   	     devices which means ensures that the content width matches the width of the device for intial-scale means This sets the 		  initial zoom level when the page is first loaded. A value of 1 means that the page is not initially zoomed in or out; it's 		  displayed at its natural size 
	   * this meta tag is not magical it is just tells the devices to use thier own width wich alreadt written with css
	   * langauge_attributes() is wordpress function to tell the website which human langauge we use for the webiste (lang=x) 			 depends on the settings you have applied to your dashboard settings of the website ---> it is very useful in seo
	   * any meta tag you want to add it will be in the header.php because it is the only place which contains <head> tag
	   * charset tells your browser which type of charachters , letters and numbers will be used in the page in form of utf-8 	   	        coding in our case
	   * so we use bloginfo('charset') to get the charset automatically from your wordpress
	   * body_class() is the favourite wordpress function which gives info about current page of wordpress ---> id , parent or 		     child etc ...
	   * we can use it in css or js
	   * we need to control menu from admin screen and if you want to build premium theme you need it controllable and flexible
	   * we go to functions.php to add menu location in our wordpress dashboard
	   * when i go there and check on add to header location to connect our menu with the only header we have in our theme
	   * wp_nav_menu() to display your dynamic menu and you pass parameters of nick name you put in fucntions.php in 					 register_nav_menu in shape of array not simple arguemnt of theme_location key
	   * when if condition consists of one line we donot need {}
	   * last thing we need parent page to be highlighted even we are on the child page so we need to generate special css class 
	     creating this stuff 
	   * we will put condition of is_page or wp_get_post_parent_id() to echo the special class
	   * be careful synatx mistakes may leads to fetal error to your front end
	   * is_home() to make sure i am on the blog posts page it is the same like is_page()
	   * is_home() is not enough because we may e on the category or the author or the single post and we still need th blog to be          yellowed
	   * so we gonna use  get_post_type() = 'post' means any thing related to the posts to cover blog page or archive(category or            authot) 
        */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width , intial-scale=1">
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
			  <?php
	/*
	
				wp_nav_menu(array(
				'theme_location' => 'headerMenuLocation'
				
				
				));
	*/
				?>
            <ul>
             <li <?php if (is_page('about-us') or wp_get_post_parent_id() == 14) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>

              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
            </ul>
			
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>
	</body>
	
</html>