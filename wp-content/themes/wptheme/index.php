<?php

get_header(); ?>


<div class="site-content clearfix">
	
	<div class="main-column">

<?php

	if(have_posts()):

		while(have_posts()): the_post();

			get_template_part('content', get_post_format());

		endwhile;

	else:

		echo "<p> No Content Found.</p>";

	endif;

?>

	</div><!-- /main-column -->

	<div class="secondary-column">
		<?php dynamic_sidebar('sidebar1'); ?>
	</div><!-- /secondary-column -->

</div><!-- /site-content clearfix -->

<?php

get_footer();

?>

