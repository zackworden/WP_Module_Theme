<?php
/*
Some Feature
To use, call the_FeatureName() within your template. It will return a post title, surrounded by !!s. 

*/

/*
In general, we found that emulating the WP function naming convention helped keep things clear and intuitive.

Don't hesitate to break things to ensure it is used correctly! In this, we are requiring that the $post global
be explicitly passed to ensure we're in the loop. Force everyone to develop good habits.
*/
function the_FeatureName ( $post ) {

	$valueToReturn = NULL;

	if ( $post !== NULL ) {
		$valueToReturn = privatishFunction();
	}

	return $valueToReturn;
}

/*
classes and namespacing caused some initial confusion, but having quasi-private functions that you DONT call from outside
ths file, along with a few quasi-public interface style functions, helped greatly in keeping things reusable.

...obviously this is a simple function for demo purposes.
*/
function privatishFunction () {
	$stringToReturn = '!!' . get_the_title() . '!!';
}