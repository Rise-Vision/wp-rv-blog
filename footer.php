
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sticky.js"></script>
	<script>
		$(document).ready(function(){
			$("#sticker").sticky({topSpacing:100});
			$("#sticky-nav").sticky({topSpacing:0});
	});
	</script>

	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50b2d755017bf1dc" async="async"></script>

	<?php if(is_single()){ ?>
		<script type="text/javascript">
		  	/* * * CONFIGURATION VARIABLES * * */
		  	var disqus_shortname = 'blogrisevision';
		  
		  	/* * * DON'T EDIT BELOW THIS LINE * * */
		  	(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			  	dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			  	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		  	})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
	<?php }else{ ?>
		<script type="text/javascript">
		  	/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		  	var disqus_shortname = 'blogrisevision'; // required: replace example with your forum shortname

		  	/* * * DON'T EDIT BELOW THIS LINE * * */
		  	(function () {
		  		var s = document.createElement('script'); s.async = true;
		  		s.type = 'text/javascript';
		  		s.src = '//' + disqus_shortname + '.disqus.com/count.js';
		  		(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		  	}());
		</script>
	<?php } ?>

	<?php wp_footer(); ?>

</body>  
</html>
