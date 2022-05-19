<?php
/* ****************************************

	Template: NEMJH
	Soubor: article-top.php
	Vytvoril: Marek Marek
	Popis:

**************************************** */
?>


<?php
global $post;
$postcat = get_the_category( $post->ID );

// try print_r($postcat) ;  
/*
if ( ! empty( $postcat ) ) {
   echo esc_html( $postcat[0]->term_id );    
}*/
?>
<div class="box_hlavni_informace_obal2 ambulance <?php echo esc_html( $postcat[0]->term_id ) .' '. esc_html( $postcat[1]->term_id ).' '. esc_html( $postcat[2]->term_id ); ?> -1">
	
	<header>
		<?php if ( is_home() || is_category('dokumenty')) { ?>
			<h2><?php the_title(); ?></h2>
		<?php }
		else { ?>
			<h3><?php the_title(); ?></h3>
		<?php } ?>
	</header>
	<?php if ( is_home()) {
	the_post_thumbnail('thumbnail');
	}
	else { ?>
	<!-- nic !-->
	<?php } ?>
	<div><?php the_content(); ?><p><?php edit_post_link('Upravit'); ?></p></div>
</div>