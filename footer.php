			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="wrap clearfix">
					<nav role="navigation">
    					<?php bones_footer_links(); ?>
	                </nav>

					<div id="fyi">
						<p>$5 for 5 cookies. Free delivery. 10PM to 3AM. Thursday, Friday, and Saturday. Text <span class="nowrap">424-241-2825</span></p>
						<ul class="float-list">
							<li><a href='mailto:john@haveasweetidea.com'><img src='<?php bloginfo('template_directory'); ?>/img/social/icon-email.png' alt='Email' width='32' height='32'></a></li>
							<li><a href='https://twitter.com/#!/haveasweetidea'><img src='<?php bloginfo('template_directory'); ?>/img/social/icon-twitter.png' alt='Follow on Twitter' width='32' height='32'></a></li>
							<li><a href='https://www.facebook.com/haveasweetidea'><img src='<?php bloginfo('template_directory'); ?>/img/social/icon-fbook.png' alt='Like on Facebook' width='32' height='32'></a></li>
						</ul>
					</div>
					<div id="legal" class="site-info">
						<?php do_action( 'sweet_idea_credits' ); ?>
						<p>All Sweet Idea cookies and cookie accessories are produced at <a href='http://www.cropcirclekitchen.org'>CropCircle Kitchen</a> in Jamaica Plain.</p>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> John Piermarini.</p>
					</div><!-- .site-info -->
				</div> <!-- end #inner-footer -->
			</footer> <!-- end footer -->
		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-35201022-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>