<?php
$uriSegments = explode("/", get_permalink());
/*echo $uriSegments[3];*/
if ( is_nav_menu( get_the_title() ) ) {
    // User has assigned menu to this location;
    // output it
    wp_nav_menu( array(
		'menu' => get_the_title(),
	) );
}
?>