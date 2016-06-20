<?php
	get_header(); 
?>

  <div class="container">
     <!-- Example row of columns -->
     <div class="row">
       <div class="col-md-12">
         <?php
			if ( have_posts() ) : 
				while ( have_posts() ) : the_post(); 
			?>
				<h3>
			<?php
				the_title();
			?>
			</h3>
				<?php
				//Text extered in the main page field
				the_content();  
				endwhile; 
				else:
			?> 
			<p>
			<?php
			_e('Sorry, no posts matched your criteria.'); 
			?>
			</p>
			<?php
			endif; 
			?>
         
       </div>
     </div>
   </div>
   
<?php get_footer(); ?>
