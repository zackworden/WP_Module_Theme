<?php

/*
Please scope all CSS rules specific to this template with:
.archive.pressrelease

Example:
.archive.pressrelease .h1 {
	my style here
}
*/
get_header();

?>
<h1>
	This is the archive page for Press Releases
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