<?php /* this is theme functions which control how css looks like in all pages of wordpress website 
       * this is behind the scene files
	   * actions are part of wordpress hooks the first instruction tells wordpress what type of actions we wanna make and when
	   * in this case the specail wordpress hook name is wp_enqueue_scripts
	   * the second instruction give the wordpress the name of the function we want to run without parantheses
	   * run action on function tells wordpress how and when it makes something
	   * wp_enqueue_style to retrieve css the first instruction is the nickname , the second argument is the location the points to 
	   	 the file
	   * wp_enqueue_script to retrieve singular js the first instruction is the nickname , the second argument is the location the 		     points to the file
	   * get_stylesheet_uri() to retrieve the URL of the active theme's stylesheet file.
	   * when we convert static html to wordpress we change	get_stylesheet_uri() argument so we import css from another place which          gonna be in the build file , extra css and style.css just to give the defination of the custom theme
	   * loading font awesome throguh external url ---> https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
	  	 just put the url without https: only and without get_theme_file_uri	
	   * loading js so that we can load animation and slider	---> array to load jquery , 1 to say it is true  and apply TRUE to 			your load your file before closing your file body tag	
	   * we need to have page title instead of page link so we make new action timing after theme setup and apply theme support for          title tag
	   * we go through here to add location of menu (the check box you can connect dynamic menu you add to the prepared 				location)through register_nav_menu('headerMenuLocation','Header Menu Location') the first paraneter in nick name and the 		 second one is the name of the menu in our dashboard (display location)
	   * you regist multiple location equals to the number of menus you have ---> header , footer 1 , footer 2 do the same you did 			in header.php
	   * custom post type 
		   -one of the most powerful aspects of the wordpress
		   -wordpress comes with two different types of posts (posts,pages)
		   -page is just special post type ---> look at edit url of pages you will find post_type=Page
		   -we need to add multiple custom post types for different types of the website (events,programs,professors,campsus)
	   * events post type   
		   -go to functions.php	 
		   -we add action on init with function register_post_type() this is will take heavy lifting for us
		   -the first argument the name of the custom post , the second is associative array that has attributes of the post
		   -public => true to make it public it will create custom post with posts title but different url post_type = event
		   -we need to change title so we have to create labels with associative array the first sub parameter is name
		   -we need to add custom icon to our post type so we add menu_icon and we go to google and search for wordpress dashicons
		    selecting your preferable icon so we can choose calender to make sense and just copy its name which is dashicons-			    calendar
		   -even we delete the custom post type code or switched to different theme that hasn't this custom post type our data is 			  still safe in our database
		   -so functions.php it is not the place to keep our custom post type code we donot our access to data to be relied on 		        specific theme
		   -plugins is the same case if some one deactivate the plugin
		   -the best solution is the must use plugin folder it sticks whatever theme we have it is static and leverege
		   -wordpress will indeed use it and automatically loaded with wordpress without locked out and away from any other theme 			  activation
      */

		function fictional_university() {
		    wp_enqueue_style( 'my-theme-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    		wp_enqueue_style( 'my-theme-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    		wp_enqueue_style( 'my-theme-style', get_theme_file_uri('/build/style-index.css') );
			wp_enqueue_style( 'my-theme-extra-style', get_theme_file_uri('/build/index.css') );
			wp_enqueue_script('my-theme-js', get_theme_file_uri("build/index.js"), array("jquery"), "1.0", true);
			}
		add_action( 'wp_enqueue_scripts', 'fictional_university' );

		function university_features(){
			
			register_nav_menu('headerMenuLocation','Header Menu Location');
			register_nav_menu('footerLocationOne','Footer Location One');
			register_nav_menu('footerLocationTwo','Footer Location Two');
			add_theme_support('title-tag');
		}


		add_action('after_setup_theme','university_features');

		
?>