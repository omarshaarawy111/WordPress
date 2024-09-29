<?php

/* the archive is the page contains posts of category or author , index.php is not responsible it is the last defence line it is 	    archive .php , wordpress will prefer proper files so it can work
 * copy every thing from index.php it is the same blog sturcture
 * make title of the specific category or autho soft coded through codition of is_category and is_author then fill them with 	  	 category name or author name single_cat_title() cat ---> category
 * we need to echo statement before author name
 * the url of the single post or archive you can edit it through permalinks
 * our url of the single post consists of day . month . year . post name and when we delete the post name from url it directes me 
   to the archive page related to the posts of this day based , month based , year based
 * instead to add condition for every base or archive title or author title wordpress generates function saves time we use 		   	  the_archive_title()
 * we can add archive author description through profile from dashboard and we can display it through the_archive_description()
 * assign archive category description through posts category from dashboard and we can display it through 	         			      the_archive_description()
 */    

get_header();
?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">
		<?php the_archive_title() ;?>
		
		</h1>
      <div class="page-banner__intro">
        <p><?php the_archive_description(); ?></p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
	  <?php
	while (have_posts()){
		
		the_post()?>
		
		<div class="post-item">
			<h2 class="headline headline--medium headline--post-title" >
				<a href="<?php the_permalink(); ?>">
				
				<?php the_title() ?>
				</a>
			</h2>
			<div class="metabox">
			
			
			<p>
				Posted by <?php the_author_posts_link() ;?> on <?php the_time('n.j.Y'); ?> in <?php echo get_the_category_list(', ') ?>
				</p>
			
			</div>	
			<div class="generic-content">
			<?php the_excerpt() ?>	 
				<p><a class="btn btn--blue" href="<?php  the_permalink() ?>">Continue reading &raquo;</a></p>
			</div>
	  </div>
		<?php
	}
	
		 
		 echo paginate_links();
		 
		 
	?>
</div>

<?php

get_footer();




?>