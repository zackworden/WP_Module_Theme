<?php
/*
The comments and sections are probably going to be team-specific, but the important point is to
keep these organized. Things will get messy fast.
*/

// site identity functions
	function get_siteTagline () {
		$tagline = "The demo theme's tagline goes here.";

		return $tagline;
	}

// hosted libraries
	function get_someHostedLibraryURL() {
		$demoLibrary = "https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js";

		return $demoLibrary;
	}



// enqueue scripts
	function enqueueMyDemoScript () {
		// enqueue script goes here
	}

	add_action('init', 'enqueueMyDemoScript');
// enqueue styles
	function enqueueMyDemoStyle () {
		// enqueue style goes here
	}

	add_action('init', 'enqueueMyDemoScript');
