<?php
/*
Template Name: Dance
*/
?>
<?php include (TEMPLATEPATH . '/no_header.php');  /* Tells WordPress to include the no header.php */ ?> 
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="col-sm-12 main_text">
<article class="excerpts">	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
 					
<div class="post single-page">
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

		<div class="postcontent">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		
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
