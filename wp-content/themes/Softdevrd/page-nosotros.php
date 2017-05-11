<?php get_header();?>
<section>
<div class="container nosotros">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 ">
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		                                    <?php query_posts(array(
		                                        'category_name'  => 'nosotros',
		                                        'posts_per_page' => 1
		                                      )); while (have_posts()) : the_post(); ?>
		<div class="text-center">       
      <h3><?php the_title()?></h3>
      <h5 class="text-center">
		    <?php the_content()?>
      </h5>
  </div>
      <?php endwhile; ?>
		            
		                  <?php wp_reset_query(); ?>

		                  <?php endwhile; 

		                  else: 
		                      echo '<p>No content found</p>';
		                  endif; ?>
     
    </div>
  </div>
</div>

<div class="container">

 <div class="row">

            
            <br>
              <div class="col-md-4">
                <center>
                  <i class="fa fa-line-chart fa-4x" aria-hidden="true"></i>
                  <br>
                  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                        <?php query_posts(array(
                                            'category_name'  => 'mision',
                                            'posts_per_page' => 1
                                          )); while (have_posts()) : the_post(); ?>
                  <h4 class="footertext"><?php the_title();?></h4>
                  <p class="footertext"><?php the_content();?><br>
                   <?php endwhile; ?>
                
                      <?php wp_reset_query(); ?>

                      <?php endwhile; 

                      else: 
                          echo '<p>No content found</p>';
                      endif; ?>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <i class="fa fa-eye fa-4x" aria-hidden="true"></i>
                  <br>
                  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                        <?php query_posts(array(
                                            'category_name'  => 'vision',
                                            'posts_per_page' => 1
                                          )); while (have_posts()) : the_post(); ?>
                  <h4 class="footertext"><?php the_title();?></h4>
                  <p class="footertext"><?php the_content();?><br>
                   <?php endwhile; ?>
                
                      <?php wp_reset_query(); ?>

                      <?php endwhile; 

                      else: 
                          echo '<p>No content found</p>';
                      endif; ?>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <i class="fa fa-heart fa-4x" aria-hidden="true"></i>
                  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                        <?php query_posts(array(
                                            'category_name'  => 'mision',
                                            'posts_per_page' => 1
                                          )); while (have_posts()) : the_post(); ?>
                  <h4 class="footertext"><?php the_title();?></h4>
                  <p class="footertext"><?php the_content();?><br>
                   <?php endwhile; ?>
                
                      <?php wp_reset_query(); ?>

                      <?php endwhile; 

                      else: 
                          echo '<p>No content found</p>';
                      endif; ?>
                </center>
              </div>
            </div>
           

</div>

</section>
 <section id="client" class="client-section">
<!----- here start the team card  --> 
  <h2>Nuestro Equipo</h2>
  <br>
<div class="container">
    <div class="row">
     <div class="col-sm-10 col-sm-offset-1">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                        <?php query_posts(array(
                                            'category_name'  => 'empleados',
                                            'posts_per_page' => -1
                                          )); while (have_posts()) : the_post(); ?>
         <div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="<?php echo get_template_directory_uri(); ?> /images/background.png"/>
                        </div>
                        <div class="user">
                         <a href="#" class="thumbnail"><img src="" alt="" ><?php the_post_thumbnail('small-thumbnail'); ?></a>
                       </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php the_title();?></h3>
                                <p class="profession"><?php the_content();?></p>
                                
                            </div>
                            
                            <!--<div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>-->
                        </div>
                    </div> <!-- end front panel 
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                            </div>
                        </div>
                    </div>  end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->

        <?php endwhile; ?>
                
                      <?php wp_reset_query(); ?>

                      <?php endwhile; 

                      else: 
                          echo '<p>No content found</p>';
                      endif; ?>
<!--         <div class="col-sm-1"></div> -->
    
        </div> <!-- end col-sm-10 -->
    </div> <!-- end row -->
    <div class="space-200"></div>
</div>

</section>
<?php get_footer();?>