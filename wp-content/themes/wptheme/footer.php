	<!--site-footer -->
	<footer class="site-footer">
	<!--site-nav -->
	<nav class="site-nav">

		<?php 

			$args = array(

				'theme_location' => 'footer'

			);

		?>

		<?php wp_nav_menu( $args ); ?>
	</nav><!-- /site-nav -->
		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
	</footer><!-- /site-footer -->
</div><!-- /container -->
<?php wp_footer(); ?>

</body>
</html>