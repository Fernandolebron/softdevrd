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
    
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                        <?php query_posts(array(
                                            'category_name'  => 'empleados',
                                            'posts_per_page' => -1
                                          )); while (have_posts()) : the_post(); ?>
         <div class="col-md-4 ">
                        
                        <div class="usertwo round">
                       
                         <a class="img-circle"><img    alt="" ><?php the_post_thumbnail('new-image'); ?></a>
                       
                        
                                <h3 class="name"><?php the_title();?></h3>
                                <p class="profession"><?php the_content();?></p>
                                
                            </div>
                        <br>
                        </div>
                 

        <?php endwhile; ?>
                
                      <?php wp_reset_query(); ?>

                      <?php endwhile; 

                      else: 
                          echo '<p>No content found</p>';
                      endif; ?>

    
        </div> <!-- end col-sm-10 -->
    </div> <!-- end row -->
   


</section>
<br>
<?php get_footer();?>