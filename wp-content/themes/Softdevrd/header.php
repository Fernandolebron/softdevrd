<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

     <title><?php bloginfo('name') ?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title();?>
    
    </title>
     
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?> /css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?> /css/scrolling-nav.css" rel="stylesheet">
	
	<!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <div class="container">
  <div class="row">
  <div class="col-md-9 col-md-push-3">  
  <nav class="navbar navbar-inverse navbar-right " role="navigation">
                    
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                            
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                           <div class="nav navbar-nav ">
                            
                                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                                <?php
                               wp_nav_menu( array(
                                   'menu'              => 'primary',
                                   'theme_location'    => 'primary',
                                   'depth'             => 2,
                                   'menu_class'        => 'nav navbar-nav')
                                   
                               );
                           ?>
                               
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                   
                </nav>                  
</div>
  <div class="col-md-3 col-md-pull-9 navbar-left ">
        <a class="navbar-brand2 hidden-md hidden-xs hidden-sm" href="inicio"> <img class="" src="<?php echo get_template_directory_uri(); ?>/logo/LOGO-EN-PNG-NORMA,.png"  width= "280px"></a>
        <a class="navbar-brand  hidden-lg" href="inicio"> <img class="" src="<?php echo get_template_directory_uri(); ?>/logo/LOGO-EN-PNG-NORMA,.png"  width= "280px"></a>

</div>
     </div>   <!--Div row-->
   </div> <!-- Div Container -->

  