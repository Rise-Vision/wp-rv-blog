<aside class="col-sm-5 col-lg-4 aside-section">
	<div class="visible-xs" ng-include="'sidebar.html'" scope="" onload=""></div>
	<div class="hidden-xs" id="sticker" ng-include="'sidebar.html'" scope="" onload=""></div>
</aside>
<script type="text/ng-template" id="sidebar.html">
  	<div class="content-box">
		<div class="content-box-body">
			<h3>Weekly Newsletter</h3>
			<p>Sign up to receive weekly updates from the Rise Vision blog by email.</p>
			<?php /* ?>
			<p ng-show="thanks">Thanks!</p>
	    	<div class="form-group">
	        	<input type="text" class="form-control" placeholder="Email" ng-class="{ 'animated fadeOut': thanks}">
	        	<button ng-click="thanks = !thanks" class="btn btn-primary half-top" ng-class="{ 'animated fadeOut': thanks}">Subscribe</button>
	      	</div>
			<?php */ ?>
			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup" class="clearfix">
				<form action="//risevision.us2.list-manage.com/subscribe/post?u=5074ef419fc3c9f4a4737962e&amp;id=c0286621a0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<div class="form-group clearfix">
							<div class="mc-field-group">
								<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Email">
							</div>
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary half-top">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;"><input type="text" name="b_5074ef419fc3c9f4a4737962e_c0286621a0" tabindex="-1" value=""></div>
					</div>
				</form>
			</div>
			<!--End mc_embed_signup-->
		</div><!--content-box-body-->
	</div><!--content-box-->

	<div class="add-top">
		<a class="btn btn-default btn-sm" href="https://plus.google.com/b/116547189186392700067"><i class="fa fa-google-plus fa-lg"></i></a>
		<a class="btn btn-default btn-sm" href="https://twitter.com/risevision"><i class="fa fa-twitter fa-lg"></i></a>
		<a href="/contact" class="btn btn-sm btn-default">Contact Us</a>
	</div>
</script>