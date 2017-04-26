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
							<h3 class=""><?php the_title()?></h1>
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
                </div>
            </div>
        </div>
    </section>

    <section id="clientes" class="clientes-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Nuestros Clientes</h1>
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
