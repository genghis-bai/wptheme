	<footer class="site-footer">
	
	<div class="footer-widgets clearfix">
		
		<?php if(is_active_sidebar('footer1')) : ?>

			<div class="footer-widgets-area">
				<?php dynamic_sidebar('footer1'); ?>
			</div><!-- /footer-widgets-area -->
		
		<?php endif; ?>

		<?php if(is_active_sidebar('footer2')) : ?>

			<div class="footer-widgets-area">
				<?php dynamic_sidebar('footer2'); ?>
			</div><!-- /footer-widgets-area -->
		
		<?php endif; ?>

		<?php if(is_active_sidebar('footer3')) : ?>

			<div class="footer-widgets-area">
				<?php dynamic_sidebar('footer3'); ?>
			</div><!-- /footer-widgets-area -->
		
		<?php endif; ?>

		<?php if(is_active_sidebar('footer4')) : ?>

			<div class="footer-widgets-area">
				<?php dynamic_sidebar('footer4'); ?>
			</div><!-- /footer-widgets-area -->
		
		<?php endif; ?>
	</div><!-- /footer-widgets -->
	

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