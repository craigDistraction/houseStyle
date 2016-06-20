<?php 
/**

Template Name: distractionIndexTemplate
@package WordPress
@subpackage Twenty_Fourteen
@since Twenty Fourteen 1.0
**/

get_header();?>
  <div class="container">
     <!-- Example row of columns -->
     <div class="row">
       <div class="col-md-12">
         <?php the_field('extra_content1');?>
         
       </div>
     </div>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <?php the_field('extra_content2');?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
       <div class="col-md-6">
         <?php the_field('extra_content3');?>
       </div>
     </div>
  </div>
<?php get_footer();?>
