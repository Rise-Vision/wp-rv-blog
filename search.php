<?php get_header(); ?>

  	<div class="page-content">
		<div class="container">
	  		<div class="row row-main">
	  		
				<section class="col-sm-7 col-lg-8 main-section">

					<?php
						global $query_string;
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						query_posts($query_string . '&post_type=post&paged='.$paged);
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