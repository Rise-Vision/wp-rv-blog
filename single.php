<?php get_header(); ?>

  	<div class="page-content">
		<div class="container">
	  		<div class="row row-main">

				<section class="col-sm-7 col-lg-8 main-section">

					<?php
			        	if (have_posts()) : $cnt = 0;
						while(have_posts()) : the_post(); ++$cnt;
					?>

					<article class="article">
						<span class="date"><?php the_time('F j, Y') ?></span>
						<span class="read-time"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>

						<?php
							if(has_post_thumbnail()) { 
								echo '<div class="image">';
									echo '<a href="'. get_the_permalink() .'">';
										$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
										echo '<img class="img-responsive aligncenter featured-image" src="' . $image_src[0] . '"/>';
									echo '</a>';
								echo '</div><!--image-->';
							}elseif(catch_that_image()){
								echo '<div class="image">';
									echo '<a href="'. get_the_permalink() .'">';
										echo '<img class="img-responsive aligncenter first-image" src="' . catch_that_image() . '"/>';
									echo '</a>';
								echo '</div><!--image-->';
							}
						?>

						<?php //display_category(); ?>

						<h2 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>   

						<?php display_tags(); ?>

						<div class="article-content">
							<?php 
								the_content(); 
								edit_post_link('edit', '<p>', '</p>');
							?>
						</div>

						<div class="blog-footer">
			  				<div class="pull-right blog-icons addthis_toolbox addthis_default_style" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title_attribute(); ?>">
								<a class="btn btn-link addthis_button_twitter"><i class="fa fa-twitter"></i></a>
								<a class="btn btn-link addthis_button_facebook"><i class="fa fa-facebook"></i></a>
								<a class="btn btn-link addthis_button_linkedin"><i class="fa fa-linkedin"></i></a>
								<a class="btn btn-link addthis_button_google_plusone_share"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>

						<br><br>

         				<div id="disqus_thread"></div>
         				
					</article>

		  			<?php
						endwhile;
					?>
						<nav>
			            	<ul class="pager">
			              		<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Back</a></li>
			            	</ul>
			          	</nav>
					<?php 
						endif;
						wp_reset_query();
			        ?>
		  		  
				</section>

				<?php get_sidebar(); ?>
	  		
	  		</div><!--row-->
		</div><!--container-->
  	</div><!--page-content-->

<?php get_footer(); ?>