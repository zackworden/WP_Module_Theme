<!DOCTYPE html>
<html>
	<head>
		<?php 
		// wp_head(); would be called here, but let's keep this simple for demo purposes..
		?>
		<title>
			WP Modular Theme Demo
		</title>
	</head>
	<body>
		<nav>
			<h2>
				Quick Links
			</h2>
			<a href="<?php echo get_site_url(); ?>">Home (home.php template)</a><br />
			<a href="<?php echo the_permalink(1); ?>">Hello-World (single.php template)</a><br />
			<a href="<?php echo get_category_link(1); ?>">Uncategorized Archive (archive.php template)</a><br />
		</nav>
		<div>
			(These will look like nothing on the front-end, as this is a demo of code and structure.)
		</div>