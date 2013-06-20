<?php
/*
* Plugin Name: Jetpack Module Deactivation Helper
* Plugin URI: http://github.com/georgestephanis/jetpack-deactivation-helper
* Description: Adds a little 'x' to the top right corner of active modules, to make it simpler for users to spot activated modules and deactivate them if they so wish.
* Author: George Stephanis
* Version: 1.0
* Author URI: http://stephanis.info/
*/

add_action( 'admin_footer-toplevel_page_jetpack', 'jetpack_deactivation_helper' );
function jetpack_deactivation_helper() {
	?>
	<style>
	.jetpack-active .jetpack-deactivate-x {
		display: block !important;
		position: absolute;
		top: 0;
		right: 0;
		width: 1.5em;
		padding: 0 0 .2em;
		text-align: center;
		text-decoration: none;
		font-weight: 700;
		background: #dfdfdf;
		color: #fff;
		border-radius: 0 2px 0 2px;
		text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
	}
	</style>
	<script>
	jQuery(document).ready(function($){
		$('.module-container > .jetpack-active').each(function(){
			var deactivate = $(this).find('.jetpack-deactivate-button');
			if ( deactivate.length ) {
				$(this).append('<a class="jetpack-deactivate-x" style="display:none;" href="' + deactivate.first().attr('href') + '">&times;</a>');
			}
		});
	});
	</script>
	<?php
}
