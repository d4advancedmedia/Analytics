<?php

/*
	Plugin Name: D4 Analytics
	Plugin URI: https://github.com/d4advancedmedia/Slideshow
	GitHub Theme URI: https://github.com/d4advancedmedia/Slideshow
	GitHub Branch: master
	Description: Simple WordPress plugin to paste in Analytics code 
	Version: 21Jan16
	Author: D4 Adv. Media
	License: GPL2
*/



$uacode = 'UA-XXXXX-X';


function footer_analytics() {
	global $uacode;
	echo(


		'<script>'.

			"(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');".
			"\n\n".
			"ga('create', '".$uacode."'', 'auto');"."\n".
			"ga('send', 'pageview');".

		'</script>'


	);
} add_action( 'wp_footer', 'skivvy_foot' );


?>