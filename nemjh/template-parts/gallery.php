<div class="galerie" style="max-width: 280px;">
	<?php $uriSegments = explode("/", get_permalink());
	if ( function_exists( 'envira_gallery' ) ) {
		envira_gallery( ''.$uriSegments[3].'', 'slug' );
	}

	?>
</div>