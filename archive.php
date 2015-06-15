<?php get_header(); ?>

  	<div class="page-content">
		<div class="container">
	  		<div class="row row-main">
	  		
				<section class="col-sm-7 col-lg-8 main-section">

					<?php
			        	if (have_posts()) : $cnt = 0;
						while(have_posts()) : the_post(); ++$cnt;
						
							get_template_part( 'content', get_post_format() ); 

						endwhile;

							get_template_part( 'content', 'nav' );
							
						endif;
						wp_reset_query();
			        ?>
		  		  
				</section>

				<?php get_sidebar(); ?>
	  		
	  		</div><!--row-->
		</div><!--container-->
  	</div><!--page-content-->

<?php get_footer(); ?>