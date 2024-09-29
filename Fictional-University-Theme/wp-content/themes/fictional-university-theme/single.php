<?php get_header();
	/* this is single post which control how post looks like other wise it is powered by index.php
	 * we write the reverse of the php in if condition
	 * we style the single post page after we add blog page and adding interior template for it
	 * we can save time and borrow code from single.php because single and page are similar
	 * be sure about the structure of every page before you add current page 
	 * add back to blog home ---> you can copy it from page.php ---> you donot need the text or the parent 
	 * the i element is the element which creates the home icon
	 * we use site_url('/blog) to make sure the dynamic url or blog in case we change the domain then the base url change but the 		 slug still the same (the generated url is absolute instead of relative)
	 * instead of the title we put the author the date and the category
	 * 
	  */



while(have_posts()){
	
	the_post();?>
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
	  
	  
<div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ;?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> <span class="metabox__main">
				Posted by <?php the_author_posts_link() ;?> on <?php the_time('n.j.Y'); ?> in <?php echo get_the_category_list(', ') ?>
				</span></p>
    </div>	  
	  <div class="generic-content"><?php the_content()?> </div>  
</div>
	
<?php }
get_footer();
?>