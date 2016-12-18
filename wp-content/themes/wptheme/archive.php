<?php

get_header();

	if(have_posts()):

		?>
		
		<h2>
			
			<?php if( is_category() ){

				single_cat_title();

				} elseif( is_tag() ){

					single_tag_title();

				} elseif( is_author() ){

					the_post();
					echo 'Author Archive: ' . get_the_author();
					rewind_posts();

				} elseif( is_day() ){

					echo 'Daily Archive: ' . get_the_date();

				} elseif( is_month() ) {

					echo 'Monthly Archive: ' . get_the_date( 'F Y' );

				} elseif( is_year() ) {

					echo 'Yearly Archive: ' . get_the_date( 'Y' );

				} else {

					echo 'Archive:';
				}

		?></h2>

	<?php

		while(have_posts()): the_post();

			get_template_part('content');

		endwhile;

	else:

		echo "<p> No Content Found.</p>";

	endif;


get_footer();

?>

