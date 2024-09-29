<?php get_header(); 
	
/*
 * the official websites you can use them as references codex.wordpress.org or developer.wordpress.org
 * home page is powered by index.php
 * functions and arrays
 	-we have arguments when call and parameters when define functions
	-make sure about value replacing when declare variable and pass it to function
	-make sure about arrays
 * famous loop
	-we write the versa of php instact when we have if condition
	-we can control any dynamic thing of wordpress with php built in fuctions
	-the_post to query posts and the rest of post functions to retrieve part of post
	-you can put these functions in html or in php directly
	-the loop is the heart and the soul of the wordpress
 * certain functions need echo and others are not	
    -donto forget when we pass varaible any where it must starts with $ symbol
	-donot forget semi colon after echo statement
	-return makes the same work like echo means my work here is done but not printing and it is used for saving purposes
	-when function begins with the ---> you donot need echo , when begins with get ---> you do need echo
 * Menus		
    -when you add wordpress dashboard location and then delete it later your wordpress will tell you that current page canot be 	 supported	
 * blog page and home page	 	
    -we need to create home page so we create front-page.php and copy all index.php in this new file
    -we need to create blog page with /blog slug so we create the coding inside index.php
 * custom queries
    -normal or default wordpress queries it is query based on url like title or content of the page
    -custom query is the hi wordpress i donot url is i want exact content to query based on my own desire like the blog section in 	    the home page
    -we add our cutom query to the blog section of the home page so we first add the_post() so we can display posts and control        them
    -we want to query with our own hands the content we want of the blog section on the home page
    -create own custom query ---> create new instance from WP_Query() class blue print we donot care how this class works 
    -wordpress creates it and do the rest for us
    -class in oop is the blue print to create new object
    -create associative array inside the class
    -inside array we make posts_per_page key equals 2 for our custom query that equals the posts page page in our query away from  	    the default number of posts we determined in the settings of the dashboard
    -have_posts() and the_post() are functions tied with the wordpress default query so instead we will use the same methods            belongs to our new custom query tied them
    -category_name is responsible of showing only posts related to specific category
    -wordpress saves every thing in form of post so page , custom posts , default posts etc ... are posts so you can select on of      them with parameter post_type
    -after you build the back end query of the posts now you can style the structure and after this replace static fields with 	 	  dynamic one
   -always the_title() , the_permalink() works at the contex you put it on and we struct this contex by using while loop
   -one of the dynamic sections is the excerpt and instead of it you can use wp_trim_words(get_the_content(),number of words you  	  want to display) we pass two paramets the text we want to trim and the number of the words we need them to be trimmed
   -always after finishing the query and the while condition loop of it put wp_reset_postdata() this methods is a way of cleaning     global valraibles and every thing after running the custom query and back to the default query based on url before we create       custom query (it is not 100% necessary but it is really good habbit)
   -donot forget to update the link of view all blog posts button
 * object -> (look inside the object)
 * custom post type 
   -one of the most powerful aspects of the wordpress
   -wordpress comes with two different types of posts (posts,pages)
   -page is just special post type ---> look at edit url of pages you will find post_type=Page
   -we need to add multiple custom post types for different types of the website (events,programs,professors,campsus)
 * events post type   
   -go to functions.php	 
  	 
 * convert static html to wordpress
 	1-header 
	2-footer
	3-build , css , image and src we move them into wordpress theme file directory  and edit css through functions.php
	4-load font awesome icon library for our theme to show related assets through functions.php
	5-load font for for our theme to show related assets through functions.php
	6-load image sources ---> edit image url with php to show it instead of edit the source every time
	7-interior page template with dynamic content
	8-title tag
	9-menu links
	10-parents and children pages
	11-menu of child pages
	12-make website reposiveness
	13-add reqiuered meta tags
	14-header and footer menus (keep them custom static or dynamic wordpress)
	15-Home and Blog page
	16-pagintation and single post page
	17-archive of blog
	17-custom queries
	
*/
?>


<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg') ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
              <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
              <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
		<?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' =>2
          ));

          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
			<div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php  the_permalink() ;?>">
              <span class="event-summary__month"><?php the_time('M'); ?></span>
              <span class="event-summary__day"><?php the_time('d'); ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php  the_permalink() ;?>"><?php the_title(); ?></a></h5>
              <p><?php echo wp_trim_words(get_the_content(),18); ?><a href="<?php  the_permalink() ;?>" class="nu gray">Read more</a></p>
            </div>
          </div>
          <?php } wp_reset_postdata();
        ?> 
          
          

          <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg') ?>);"">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg') ?>);"">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg') ?>);"">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>


<?php
get_footer();
?>