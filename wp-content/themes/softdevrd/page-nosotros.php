<?php get_header();?>
<div class="container ">
	<div class="row">

		<div class="col-md-4">
		<div class="thumbnail">
	     	
		<?php
	          if (have_posts()):
	          while (have_posts()) : the_post(); ?>
	          <?php query_posts(array(
	             'category_name'  => 'nosotros',
	             'posts_per_page' => 1
	             )); while (have_posts()) : the_post(); ?>
	             <a href="#"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		
	    </div>

	</div>
		<div class="col-md-8">
			<h3><?php the_title(); ?></h3>
	        <p><?php the_excerpt(); ?></p>
		</div>
		<?php endwhile; ?>
	            
	                  <?php wp_reset_query(); ?>

	                  <?php endwhile; 

	                  else: 
	                      echo '<p>No content found</p>';
	                  endif; ?>
	</div>
</div>
<div class="container">
	<div class="row">

		<div class="col-md-4">
			<?php
	          if (have_posts()):
	          while (have_posts()) : the_post(); ?>
	          <?php query_posts(array(
	             'category_name'  => 'mision',
	             'posts_per_page' => 1
	             )); while (have_posts()) : the_post(); ?>
	             <div >
		             <h3><?php the_title(); ?></h3>
		       		 <p><?php the_excerpt(); ?></p>
	       		</div>
	       		<?php endwhile; ?>
	            
	                  <?php wp_reset_query(); ?>
	
	                  <?php endwhile; 
	
	                  else: 
	                      echo '<p>No content found</p>';
	                  endif; ?>
		</div>
	
			<div class="col-md-4">
			<?php
	          if (have_posts()):
	          while (have_posts()) : the_post(); ?>
	          <?php query_posts(array(
	             'category_name'  => 'vision',
	             'posts_per_page' => 1
	             )); while (have_posts()) : the_post(); ?>
	             <div >
		             <h3><?php the_title(); ?></h3>
		       		 <p><?php the_excerpt(); ?></p>
	       		</div>
	       		<?php endwhile; ?>
	            
	                  <?php wp_reset_query(); ?>
	
	                  <?php endwhile; 
	
	                  else: 
	                      echo '<p>No content found</p>';
	                  endif; ?>
		</div>
		<!-- valores-->
			<div class="col-md-4">
			<?php
	          if (have_posts()):
	          while (have_posts()) : the_post(); ?>
	          <?php query_posts(array(
	             'category_name'  => 'valores',
	             'posts_per_page' => 1
	             )); while (have_posts()) : the_post(); ?>
	             <div >
		             <h3><?php the_title(); ?></h3>
		       		 <p><?php the_excerpt(); ?></p>
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
<?php get_footer();?>