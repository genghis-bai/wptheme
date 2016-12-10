<?php

get_header();

	if(have_posts()):

		while(have_posts()): the_post(); ?>

			<article class="post page">

			<!--site-nav childern-link clearfix -->
			<nav class="site-nav childern-links clearfix">

				<span class="parent-link"><a href="<?php get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>

				<ul>

					<?php $args = array(

						'child_of' => get_top_ancestor_id(),
						'title_li' => ''

					); 

					?>

					<?php wp_list_pages($args); ?>

				</ul>

			</nav><!-- /site-nav childern-link clearfix -->

				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>

			</article>

		<?php endwhile;

	else:

		echo "<p> No Content Found.</p>";

	endif;

get_footer();

?>

