<?php
/*
Template Name: Contact
*/
?>
<?php include (TEMPLATEPATH . '/no_header.php');  /* Tells WordPress to include the no header.php */ ?> 
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="col-sm-12 text">
<article class="excerpts">	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
 					
<div class="post single-page">
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

  <p><?php the_field('contact_edit'); ?></p>

		
	</div><!--post class-->
	
   
<?php endwhile; ?>
			
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->


</section> <!--main_articles-->
          
            
     </div>
    </div>
  </div>


<?php get_footer(); ?>        
