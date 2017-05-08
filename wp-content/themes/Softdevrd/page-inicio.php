<?php get_header()?>
        


   
     <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Servicios</h1>
                    <br>
                    	<div class="row">
                    		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		                                    <?php query_posts(array(
		                                        'category_name'  => 'servicios',
		                                        'posts_per_page' => 4
		                                      )); while (have_posts()) : the_post(); ?>
                    		<div class="col-lg-3">
		                    
		                    <a href="#" class="thumbnail "><img src="" alt="" style=""><?php the_post_thumbnail('small-thumbnail'); ?></a>
							<h3 class=""><?php the_title()?></h3>
		                    <p  class=""><?php the_content()?></p>
		                                                  
		                                <!--<div class="carousel-desc">

		                                    <h3><?php the_title(); ?></h3>
		                    <p><?php the_excerpt(); ?></p>-->
		                
		               
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
        </div>
    </section>
    
    
       
    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Portafolio</h1>
                    <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    
                    <div class="row">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientes1',
                                                'posts_per_page' => 4
                                              )); while (have_posts()) : the_post(); ?>
                      <div class="col-md-3"><a href="<?php the_content()?>" class="thumbnail"><?php the_post_thumbnail('small-thumbnail'); ?></a><h3 class=""><?php the_title()?></h3></div>
                        <?php endwhile; ?>
                    
                          <?php wp_reset_query(); ?>

                          <?php endwhile; 

                          else: 
                              echo '<p>No content found</p>';
                          endif; ?>
                    </div><!--.row-->
                    
                </div><!--.item-->
                 
                
                <div class="item">
                    <div class="row">
                         <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientes2',
                                                'posts_per_page' => 4
                                              )); while (have_posts()) : the_post(); ?>
                      <div class="col-md-3"><a href="<?php the_content()?>" class="thumbnail"><?php the_post_thumbnail('small-thumbnail'); ?></a><h3 class=""><?php the_title()?></h3></div>
                        <?php endwhile; ?>
                    
                          <?php wp_reset_query(); ?>

                          <?php endwhile; 

                          else: 
                              echo '<p>No content found</p>';
                          endif; ?>
                        </div><!--.row-->
                </div><!--.item-->
            
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div><!--.Carousel-->
                </div>
            </div>
        </div>
    </section>

    <section id="clientes" class="clientes-section">
       <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Nuestros Clientes</h1>
                  
                                    
                    <div class="row">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientes1',
                                                'posts_per_page' => -1
                                              )); while (have_posts()) : the_post(); ?>
                      <div class="col-md-3"><a href="<?php the_content()?>" class="thumbnail"><?php the_post_thumbnail('small-thumbnail'); ?></a><h3 class=""><?php the_title()?></h3></div>
                        <?php endwhile; ?>
                    
                          <?php wp_reset_query(); ?>

                          <?php endwhile; 

                          else: 
                              echo '<p>No content found</p>';
                          endif; ?>
                    </div><!--.row-->
                    
                </div><!--.item-->
                 
                
               
                </div>
            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contactanos_service" class="contacto-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1><i class="fa fa-lightbulb-o fa-1x" aria-hidden="true"></i> Tu Idea, <i class="fa fa-code" aria-hidden="true"></i> Te Ayudamos a Hacerla Realidad    </h1>
                </div>
                <div class="col-lg-3 ">
                	<h2 class="callme"><i class="fa fa-hand-o-right" aria-hidden="true"></i> 849-352-5583</h2>
                </div>
            </div>
        </div>
    </section>

        <section id="client" class="client-section">
       <div class="container">
            <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h2>Que Dicen Nuetros Clientes?</h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientesop1',
                                                'posts_per_page' => 1
                                              )); while (have_posts()) : the_post(); ?>
                <div class="col-sm-3 text-center">
                 <a href="" class="img-circle thumbnail"><?php the_post_thumbnail('small-thumbnail');?></a>
                </div>
                <div class="col-sm-9">
                    
                   <p><?php echo the_content();?></p>
               
                  
                </div>
                 <?php endwhile; ?>
                    
                          <?php wp_reset_query(); ?>

                          <?php endwhile; 

                          else: 
                              echo '<p>No content found</p>';
                          endif; ?>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
           <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientesop2',
                                                'posts_per_page' => 2
                                              )); while (have_posts()) : the_post(); ?>
          
          <div class="item">
            <blockquote>

              <div class="row">
               
                <div class="col-sm-3 text-center">
                 <a href="" class="img-circle thumbnail"><?php the_post_thumbnail('small-thumbnail');?></a>
                </div>
                <div class="col-sm-9">
                    
                      
                   <p><?php echo the_content();?></p>
              
                  
                </div>
                 
              </div>
            </blockquote>
          </div>
          <?php endwhile; ?>
                    
                          <?php wp_reset_query(); ?>

                          <?php endwhile; 

                          else: 
                              echo '<p>No content found</p>';
                          endif; ?>
          <!-- Quote 3 -->
         
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contactanos</h1>
                </div>
            </div>
        </div>
    </section>

    

  <?php get_footer()?>
