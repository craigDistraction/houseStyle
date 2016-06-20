<?php
/**
 * Template Name: distractionPostTemplate
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>

 <div class="container">
     <!-- Example row of columns -->
     <div class="row">
       <div class="col-md-12">
         <?php 
	        if ( have_posts() ): 
				while ( have_posts() ) : the_post(); 		
					//Text extered in the main page field
					the_content();  
				endwhile; 
			endif;
         ?>
       </div>
     </div>
   </div>
   
<?php get_footer(); ?>
