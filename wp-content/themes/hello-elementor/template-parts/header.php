<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
$site_name = get_bloginfo('name');
$tagline = get_bloginfo('description', 'display');
$header_nav_menu = wp_nav_menu([
	'theme_location' => 'menu-1',
	'fallback_cb' => false,
	'echo' => false,
]);
?>

<header id="site-header" class="site-header">
	<div>
		<a style="height: 40px;display:block" class="" href="/">
			<img style="height: 100%; width:auto"
				src="https://cdn-jlnff.nitrocdn.com/OWILVzPRUmsgRXfqPQrALFcZglDmMfWU/assets/images/optimized/rev-ad0b6ac/www.phytoceutics.com/wp-content/uploads/2023/07/Phytoceutics_Logo-2048x347.png"
				alt="phyto logo">
		</a>
	</div>
</header>