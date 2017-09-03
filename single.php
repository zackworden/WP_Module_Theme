<?php

/*
Please scope all CSS rules specific to this template with:
.single

Example:
.single .h1 {
	my style here
}
*/
get_header();

?>
<h1>
	This is the single post template
</h1>
<?php

if ( have_posts() )
{
	while ( have_posts() )
	{
		the_post();
		
		/*
		As an example, we will call someFeature, which is defined in /includes/someFeature.php.
		We had great success in keeping null checking within the include file, keeping template logic readable and simple.

		It was also helpful that someFeature would bias towards breaking templates than allowing unforeseen issues, so we
		enforced dependancy injection, even for global variables.
		*/
		?>
		<h1>
			<?php the_FeatureName( $post ); ?>
		</h1>
		<?php
	}
}

get_footer();