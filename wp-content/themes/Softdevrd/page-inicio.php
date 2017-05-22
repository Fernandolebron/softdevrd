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
       <h1>Portafolio</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <!-- begin panel group -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
                <!-- panel 1 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4 class="panel-title">She Sells Seashells</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        That fall, as Nadia and Masha got shipped off to prison camps in Siberia, South Brooklyn tried to recover from the storm. My dad and I spent a lot of time in the same apartment engrossed in separate laptops, separate internet missives. He followed Russian news bloggers closely and would update me on troubling developments. A rise in protofascist nationalism
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">TAB 2</h4>
                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        tab 2 content
                        </div>
                    </div>
                </div>
                <!-- / panel 2 -->
                
                <!--  panel 3 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4 class="panel-title">TAB 3 </h4>
                        </div>
                    </span>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                          <!-- tab content goes here -->
                           tab 3 content
                          </div>
                        </div>
                      </div>
            </div> <!-- / panel-group -->
             
        </div> <!-- /col-md-4 -->
        
        <div class="col-md-8">
            <!-- begin macbook pro mockup -->
            <div class="md-macbook-pro md-glare">
                <div class="md-lid">
                    <div class="md-camera"></div>
                    <div class="md-screen">
                    <!-- content goes here -->                
                        <div class="tab-featured-image">
                            <div class="tab-content">
                                <div class="tab-pane  in active" id="tab1">
                                        <img src="https://ununsplash.imgix.net/photo-1417024321782-1375735f8987?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950" alt="tab1" class="img img-responsive">
                                </div>
                                <div class="tab-pane " id="tab2">
                                    
                                        <img src="https://unsplash.imgix.net/uploads/1411724908903377d4696/2e9b0cb2?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950">
                                    
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    
                                        <img src="https://ununsplash.imgix.net/photo-1422479516648-9b1f0b6e8da8?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950" alt="tab1" class="img img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-base"></div>
            </div> <!-- end macbook pro mockup -->



        </div> <!-- / .col-md-8 -->
    </div> <!--/ .row -->
</div> <!-- end sidetab container -->
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
  <h1>Que Opinan Nuestros Clientes?</h1>
        <div class="container">
        <div class="row">
            <div class="col-lg-12 user">
                
                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="2" ></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
                  </ol>
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    
                    <div class="col-md-12 item active">
                    
                       <div class="col-md-4" >

                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientesop1',
                                                'posts_per_page' => 1
                                              )); while (have_posts()) : the_post(); ?>
                       <a> <img class="img-circle" alt=""><?php the_post_thumbnail('new-image'); ?></a>

                        </div>

                        <div class="col-md-8">
                          <h3><?php the_title();?></h3>
                          <p><?php the_content();?></p>
                            
                        </div>
                        <?php endwhile; ?>
                    
                          <?php wp_reset_query(); ?>

                          <?php endwhile; 

                          else: 
                              echo '<p>No content found</p>';
                          endif; ?>

                    </div>
                    
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                            <?php query_posts(array(
                                                'category_name'  => 'clientesop1',
                                                'posts_per_page' => 1
                                              )); while (have_posts()) : the_post(); ?>
                    <div class="col-md-12 item">
                    
                       <div class="col-md-4" >

                        
                       <a> <img class="img-circle" alt=""><?php the_post_thumbnail('new-image'); ?></a>

                        </div>

                        <div class="col-md-8">
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
