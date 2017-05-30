			<!-- footer -->
			<footer id="footer" class="footer" role="contentinfo">
				<div class="width-wrap">
					<p><small>&copy; Copyright <?php echo date('Y'); ?> Phone Doc</small></p>
				</div>
			</footer>

			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/build/vendor.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/build/main.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/build/map.min.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbw6aZBcqnNcM6AWzOxIgJ5XKJHWzc2Tg&callback=initMap">
		</script>

	</body>
</html>
