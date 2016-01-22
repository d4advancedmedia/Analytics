<?php

/*
	Plugin Name: D4 Analytics
	Plugin URI: https://github.com/d4advancedmedia/Analytics
	GitHub Theme URI: https://github.com/d4advancedmedia/Analytics
	GitHub Branch: master
	Description: Simple WordPress plugin to paste in Analytics code and hook it into the footer
	Version: 21Jan16
	Author: D4 Adv. Media
	License: GPL2
*/

function footer_analytics() {

	$analytics_account = '';
	$uacode = 'UA-XXXXX-X';




?><script>

<?php # if ( is_user_logged_in() ) : ?>
	/* Acct: <?php echo $analytics_account; ?> */
<?php # endif; ?>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', '<?php echo $uacode; ?>', 'auto');
	ga('send', 'pageview');

</script><?php 


} add_action( 'wp_footer', 'footer_analytics' );


?>