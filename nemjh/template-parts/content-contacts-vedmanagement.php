<?php
/* ****************************************

	Template: NEMJH
	Soubor: content-top.php
	Vytvoril: Marek Marek
	Popis:

**************************************** */
?>
<section class="kontakty">
	<div class="kontakty_obal">
	<?php
	$uriSegments = explode("/", get_permalink());
	$blogusers = get_users( 'role=z_vedeni_nemocnice&orderby=url&order=ASC');
	/* Test překladu ID rolí na názvy (funkční) */
	global $wp_roles;
	/*echo translate_user_role( $wp_roles->roles[ up ]['name'] );*/
	/* Výpis uživatelů */
		echo '<table>';
		echo '<thead><tr><th></th><th>Oddělení, pozice</th><th>Jméno</th><th>Telefon</th><th>E-mail</th></thead>';
		foreach ( $blogusers as $user ) {
		echo '<tbody><tr><td><p class="kontakt-'.esc_html( $user->display_name ).'"><a href="'.get_wp_user_avatar_src($user->ID).'" class="envirabox">' .get_wp_user_avatar($user->ID) . '</a></p></td>';
		echo '<td><div class="kontakt-'.$user->roles[3].'">'.translate_user_role( $wp_roles->roles[ $user->roles[3] ]['name']).'&nbsp;&nbsp;&nbsp;</div><div class="kontakt-'.$user->roles[0].'">'.translate_user_role( $wp_roles->roles[ $user->roles[0] ]['name'] ).'&nbsp;&nbsp;&nbsp;</div><div class="kontakt-'.$user->roles[1].'">'.translate_user_role( $wp_roles->roles[ $user->roles[1] ]['name'] ).'</div><div class="kontakt-'.$user->roles[4].'">'.translate_user_role( $wp_roles->roles[ $user->roles[4] ]['name'] ).'</div><div class="kontakt-'.$user->roles[5].'">'.translate_user_role( $wp_roles->roles[ $user->roles[5] ]['name'] ).'</div></td>';
		echo '<td><b>' . esc_html( $user->display_name ) . '</b></td>';
		echo '<td>' . esc_html( $user->aim ) . '</td>';
		echo '<td><a href="mailto:' . esc_html( $user->user_email ) . '" class="'. esc_html( $user->user_email ) .'">' . esc_html( $user->user_email ) . '</a></td></tr></tbody>';
			/*echo '<div>' . esc_html( $user->roles[1] ) . '</div>';*/
		
		
		}
		echo '</table>';
	?>
	</div>
</section>