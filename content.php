<?php
/**
 * The default template for displaying content
 *
 * Used for both single and home/search/archive.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>
	<span class="date"><?php the_time('F j, Y') ?></span>
	<span class="read-time"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>

	<?php
		if(has_post_thumbnail()) { 
			echo '<div class="image">';
				echo '<a href="'. get_the_permalink() .'">';
					$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
					if($image_src){
						echo '<img class="img-responsive aligncenter featured-image" src="' . $image_src[0] . '"/>';
					}else{
						echo '<img class="img-responsive aligncenter first-image" src="' . catch_that_image() . '"/>';
					}
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
		<?php the_excerpt(); ?>
	</div>
						
	<div class="blog-footer">
		<div class="pull-right blog-icons addthis_toolbox addthis_default_style" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title_attribute(); ?>">
			<a class="btn btn-link addthis_button_twitter"><i class="fa fa-twitter"></i></a>
			<a class="btn btn-link addthis_button_facebook"><i class="fa fa-facebook"></i></a>
			<a class="btn btn-link addthis_button_linkedin"><i class="fa fa-linkedin"></i></a>
			<a class="btn btn-link addthis_button_google_plusone_share"><i class="fa fa-google-plus"></i></a>
		</div>
		<div class="comment-count">
			<a href="<?php echo untrailingslashit(get_the_permalink()); ?>#disqus_thread" data-disqus-identifier>
				<span class="disqus-comment-count" data-disqus-url="<?php the_permalink(); ?>"><!-- Count will be inserted here --> </span>
			</a>
		</div>
	</div>
</article>