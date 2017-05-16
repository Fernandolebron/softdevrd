<!DOCTYPE html>


<html <?php language_attributes(); ?>>
  <head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo('name') ?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title();?>
      
    </title>
    
    

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/scrolling-nav.css" rel="stylesheet">

       <!-- font-awesome core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_head(); ?>

  </head>
   <body  >

  
    
    <!--<h1 class="text-center">Example 3 - Increase entire navbar height</h1>-->
        <div class="container-fluid "><!-- please put conainer or delimater OJO not terminated --> 

 <!-- begin navigation !-->
    <nav class="navbar navbar-inverse navbar" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
         
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class=" page-scroll" href=""> <img class="" src="<?php echo get_template_directory_uri(); ?>/logo/LOGO-EN-PNG-NORMA.png"  width= "270px"></a>
           
        </div>
        <div id="navbar" class="collapse navbar-collapse  ">
          
              <div class="nav navbar-nav navbar-right">
                   <!-- Adding Wordpress code for real pages --> 
                   <?php
                   wp_nav_menu( array(
                       'menu'              => 'primary',
                       'theme_location'    => 'primary',
                       'depth'             => 2,
                       'menu_class'        => 'nav navbar-nav')
                       
                   );
               ?>
                
          </div>
            
              
        </div><!-- /.nav-collapse -->
      
    </nav>
</div><!-- /.container -->
         <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
         
            <div class="row">
                <div class=" headerh col-lg-12">

                   <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                    <?php query_posts(array(
                                        'category_name'  => 'header',
                                        'posts_per_page' => 1
                                      )); while (have_posts()) : the_post(); ?>
          <h1 class=""><?php the_title()?></h1>
                    <p  class=""><?php the_content()?></p>
                   <br>                              
                               
                
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>

                    
                    
                </div>
                 

                  
            </div>

           
        </div>
    </section>