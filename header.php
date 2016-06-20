<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DESCRIPTION OF FUTURE PROJECT">
    <meta name="author" content="Distraction">

	<!-- Website Title -->
    <title><?php wp_title('|',true,'right'); ?></title>

	<!-- Relays information about the website // Can be called elsewhere as a function -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <!-- Request to the latest jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Minified Bootstrap // Pulled from CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

	<!-- Standard CSS file. First port of call for style changes -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css">

	<!-- Required for some plugins to work -->
	<?php wp_head(); ?>

</head>

<body>

  <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <?php /* Primary navigation */
				wp_nav_menu( array(
				  'menu' => 'top_menu',
				  'theme_location'    => 'primary',
				  'depth' => 2,
				  'container' => 'div',
				  'container_class'   => 'container ',
				  
				  'menu_class' => 'nav navbar-nav',
				  'allback_cb'       => 'wp_bootstrap_navwalker::fallback',
				  //Process nav menu using our custom nav walker
				  'walker' => new wp_bootstrap_navwalker())
				);			
			?>   
          </ul>     
		</div><!--/.nav-collapse -->
      </div>
    </nav>

   <!-- Main jumbotron for a primary marketing message or call to action -->
   <div class="jumbotron" style="background-image: url('<?php the_field('header_image');?>')"> 
           
     <div class="container">
     
     <?php	
		if ( have_posts() ): 
			while ( have_posts() ) : the_post(); 		
				//Text extered in the main page field
				?> <h1> <?php the_title(); ?> </h1> <?php
				the_content();  
			endwhile; 
		endif;
	  ?>
	  
      </div>
   </div>
