<?php get_header();?>

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
      <p class="text-center">
		<?php the_content()?>
      </p>
  </div>
      <?php endwhile; ?>
		            
		                  <?php wp_reset_query(); ?>

		                  <?php endwhile; 

		                  else: 
		                      echo '<p>No content found</p>';
		                  endif; ?>
      <ul class="timeline">
        <li>
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step One</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Two</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li>
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Three</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<?php get_footer();?>