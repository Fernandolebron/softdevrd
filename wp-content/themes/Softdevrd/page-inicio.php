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
                    		<div class="col-lg-3 user">
		                    
                            <a><img  class="img-circle"  alt="" ><?php the_post_thumbnail('new-image'); ?></a>
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
    
    <!-- end of servicess --> 
       
    <!--Portfolio -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 user">
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
                   <div class="col-xs-12 col-sm-3 ">
                            
                            <a><img  class="img-circle"  alt="" ><?php the_post_thumbnail('new-image'); ?></a>
                        <h3 class=""><?php the_title()?></h3>
                    </div>
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
                      <div class="col-lg-3 ">
                            
                            <a><img  class="img-circle"  alt="" ><?php the_post_thumbnail('new-image'); ?></a>
                        <h3 class=""><?php the_title()?></h3></div>
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


<!--End of Portfolio -->


<!--Clientes-->
    <section id="clientes" class="clientes-section">
       <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 user">
                    <h1>Nuestros Clientes</h1>
                  
                                    
                    <div class="row">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientes1',
                                                'posts_per_page' => -1
                                              )); while (have_posts()) : the_post(); ?>
                     <div class="col-lg-3 ">                            
                     <a class=""><img   alt="" ><?php the_post_thumbnail('new-image'); ?></a>
                        <h3 class=""><?php the_title()?></h3></div>
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

<!--End of Clientes -->

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

    <!-- End of Contact Section -->


        <!-- What Clients said About us section -->
<section id="client" class="client-section">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 user">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
                  </ol>
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientesop1',
                                                'posts_per_page' => 1
                                              )); while (have_posts()) : the_post(); ?>
                    <div class=" active item">
                        <div class="profile-circle " >
                        <img  class="img-circle" alt="" ><?php the_post_thumbnail('new-image'); ?>
                        
                        <h3><?php the_title();?></h3>
                        
                        
                            <p><?php the_content();?></p>
                            
                         </div>
                    </div>
                    <?php endwhile; ?>
                    
                          <?php wp_reset_query(); ?>

                          <?php endwhile; 

                          else: 
                              echo '<p>No content found</p>';
                          endif; ?>

                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientesop2',
                                                'posts_per_page' => 5
                                              )); while (have_posts()) : the_post(); ?>
                    <div class="item">
                        <div class="profile-circle " >
                         <img  class="img-circle" alt="" ><?php the_post_thumbnail('new-image'); ?>
                         <h3><?php the_title();?></h3>
                    
                            <p><?php the_content();?></p>
                       
                        </div>
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
    </div>
   </div>
    </section>
<!-- What Clients said About us section -->


    <!-- Contact Form Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contactanos</h1>
                </div>
            </div>
        </div>
    </section>

        <!-- Contact Form Section -->

  <?php get_footer()?>
