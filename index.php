<?php

/*
	Plugin Name: D4 Analytics
	Plugin URI: https://github.com/d4advancedmedia/Analytics
	GitHub Theme URI: https://github.com/d4advancedmedia/Analytics
	GitHub Branch: master
	Description: Simple WordPress plugin to paste in Analytics code and hook it into the footer
	Version: 24Mar16
	Author: D4 Adv. Media
	License: APACHE 2.0
*/

function footer_analytics() {

	$analytics_account = '';
	$uacode = 'UA-XXXXX-X';




?><script>
<?php # if ( is_user_logged_in() ) : ?>
	/* Acct: <?php echo $analytics_account; ?> */
<?php # endif; ?>

window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', '<?php echo $uacode; ?>', 'auto');
ga('require', 'autotrack');
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<?php

// Simple Autotrack
	echo '<script async src='. plugins_url( '/js/autotrack.js' , __FILE__ ). '></script>';

// Advanced Autotrack w/ plugins
    // Javascript require() function must be set
#	echo '<script async src='. plugins_url( '/js/lib/plugins/autotrack.js' , __FILE__ ). '></script>';


} add_action( 'wp_footer', 'footer_analytics' );


?>