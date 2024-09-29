<?php get_header();
	/* this is single page template which control how post looks like other wise it is powered by index.php
	 * the post function to get the data related to our work in the page from the wordpress data base
	 * here we put the interior page template as static and replace some places with the dynamic content related to every page 
	 * for comments <!-- -->
	 * the_title for the title of the page also the content for the content of the pages
	 * we need the breadcrumb to change back for the parent page for child pages only so we gonna use if statement the current page        has parent page id or no also work in the title of the page to get the parent page actual title
	 * post id when working with any post or page the url contains number which is id so we have only one parent page we gonna use
	   the id of it
	 * get_the_ID() to get the current id of the child page other wise it retrievs 0 for the parent id
	 * wp_get_post_parent_id() to get the id of the parent page ---> 0 means no parent FALSE any other number means TRUE
	 * the_title () get the title of the page but get_the_title() pass the title  of the page depends on the id and you must pass 	     arguement so we can pass it later to the permalink to create refrenece link ; this argument will be the id
	 * change the title and the link of the parent page
	 * we want menu of child pages only for every parent page 
	 * we can work through wp_list_pages(and we put associative array)
	 * associative array ---> is the same idea like dictionary in  python every pair has a key and value
	 * to set any value to 0 we associate null to it 
	 * title_li is responsible of the title of the menu of the pages in the wordpress
	 * child_of represent the child of specific parent page when we pass get_the_id it make it dynamic for every parent page    	   fetching its ID and working on this flow but the problem that we canot use the current ID of the parent in the child page
	 * so we make condition for parent and for the child
	 * get_the_title ---> understands the 0 id as current page which referes to the parent page we are on and the_title() do the 	    same functionality
	 * we must ask our selves if we go to page not child nor parent how can we represent it ? so we add condtion for this
	 * we use or for multiple conditions
	 * get_pages() returns pages in momery like wp_list_pages() but the other one echo pages
	 * test array is used for getting id of child so later we will ask if this page parent or child
	 * wordpress defaultly use the alphabetic ordering but if you want to use your own order you can do it
	 * sort_column = menu order the order you give to pages which appears first depends on order you made in the dashboard
	 * when we pass zero or nothing to our functions it means the current thing
	  */
	


while(have_posts()) {
    the_post(); ?>
    
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>DONT FORGET TO REPLACE ME LATER</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
    
    <?php
      $theParent = wp_get_post_parent_id();
      if ($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
      <?php }
    ?>

    
    
    <?php 
    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if ($theParent or $testArray) { ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
    <?php } ?>
	  
    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>
    
  <?php }

get_footer();
?>