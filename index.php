<?php

/*
Please scope all CSS rules specific to this template with:
.indexPage

Example:
.indexPage .h1 {
	my style here
}
*/
get_header();

?>
<h1>
	This is the index page
</h1>
<?php

if ( have_posts() )
{
	while ( have_posts() )
	{
		the_post();
		?>
		<?php
	}
}

get_footer();