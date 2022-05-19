<?php
/* ****************************************

	Template: NEMJH
	Soubor: content-top.php
	Vytvoril: Marek Marek
	Popis:

**************************************** */
?>
<?php
	$uriSegments = explode("/", get_permalink());
	//$blogusers = get_users( 'role='.$uriSegments[3].'&orderby=url&order=ASC');
	$blogusers = get_users( [ 'role' => [ ''.$uriSegments[3].'' ], 'role__in' => [ 'primar', 'primarka', 'vedouci_lekar', 'vedouci_lekarka', 'vedouci_oddeleni', 'vrchni_sestra', 'stanicni_sestra', 'stanicni_sestra_a', 'stanicni_sestra_b', 'stanicni_sestra_c', 'stanicni_sestra_d', 'stanicni_sestra_jip', 'stanicni_sestra_amb', 'kaplan', 'referent', 'zdravotne_socialni_pracovnice', 'vedouci_laborant', 'vedouci_laborantka', 'usekovy_laborant', 'vedouci_pouzp', 'vedouci_rehabilitacni_pracovnik', 'vedouci_farmaceut', 'vedouci_farmaceuticka_asistentka' ], 'orderby'  => 'url', 'order'  => 'ASC' ] );
	/* Test překladu ID rolí na názvy (funkční) */
	global $wp_roles;
	/*echo translate_user_role( $wp_roles->roles[ up ]['name'] );*/	
		

	
	if( role_exists( $uriSegments[3] ) ) {
	  echo '<section class="box_hlavni_informace">
	<div class="box_hlavni_informace_obal3">
	<div class="box_hlavni_informace_obal">';
	/* Výpis uživatelů */ /* pro výpočet počtu výpisů$i = 0;*/
	foreach ( $blogusers as $user ) {
		
		/* pro výpočet počtu výpisů $i++;*/
		
		if ( in_array( 'primar', (array) $user->roles ) || in_array( 'primarka', (array) $user->roles ) || in_array( 'vedouci_lekar', (array) $user->roles ) || in_array( 'vedouci_lekarka', (array) $user->roles ) || in_array( 'vedouci_oddeleni', (array) $user->roles ) || in_array( 'kaplan', (array) $user->roles ) || in_array( 'referent', (array) $user->roles ) || in_array( 'zdravotne_socialni_pracovnice', (array) $user->roles ) || in_array( 'vedouci_laborant', (array) $user->roles ) || in_array( 'vedouci_laborantka', (array) $user->roles ) || in_array( 'usekovy_laborant', (array) $user->roles ) || in_array( 'vedouci_pouzp', (array) $user->roles ) || in_array( 'vedouci_rehabilitacni_pracovnik', (array) $user->roles ) || in_array( 'vedouci_farmaceut', (array) $user->roles ) || in_array( 'vedouci_farmaceuticka_asistentka', (array) $user->roles )) {
			echo '<div class="uzivatel_obal">';
			echo '<div class="uzivatel_avatar">' .get_wp_user_avatar($user->ID) . '</div>';
			echo '<div class="uzivatel_info"><div class="uzivatel_jmeno">' . esc_html( $user->display_name ) . '</div>';
			echo '<div class="uzivatel_tag"><div class="kontakt-'.$user->roles[0].'">' .translate_user_role( $wp_roles->roles[ $user->roles[0] ]['name'] ). '</div><div class="kontakt-'.$user->roles[1].'">' .translate_user_role( $wp_roles->roles[ $user->roles[1] ]['name'] ). '</div><div class="kontakt-'.$user->roles[2].'">' .translate_user_role( $wp_roles->roles[ $user->roles[2] ]['name'] ). '</div><div class="kontakt-'.$user->roles[3].'">' .translate_user_role( $wp_roles->roles[ $user->roles[3] ]['name'] ). '</div></div>';
			if ( $user->aim ) :
				echo '<div><img src="'.get_bloginfo('template_url').'/images/ikona_profil_telefon.png"> ' . esc_html( $user->aim ) . '</div>';		
			endif;
			if ( $user->user_email ) :
				echo '<div class="'. esc_html( $user->user_email ) .'"><img src="'.get_bloginfo('template_url').'/images/ikona_profil_email.png"> <a href="mailto:' . esc_html( $user->user_email ) . '">' . esc_html( $user->user_email ) . '</a></div>';
			endif;
			if ( in_array( 'zivotopis', (array) $user->roles ) ) {
				echo '<div class="uzivatel_zivotopis"><img src="'.get_bloginfo('template_url').'/images/ikona_profil_zivotopis.png"> <a href="'.get_site_url()."/".esc_html( $user->user_login ).'">Profesní životopis</a></div>';
			}
			echo '</div>';
			/*echo '<div>' . esc_html( $user->roles[1] ) . '</div>';*/
		}
		if (!is_page(array( 418 ))) {
		if (in_array( 'vrchni_sestra', (array) $user->roles ) || in_array( 'stanicni_sestra', (array) $user->roles ) || in_array( 'stanicni_sestra', (array) $user->roles )) {
			echo '<div class="uzivatel_obal">';
			echo '<div class="uzivatel_avatar">' .get_wp_user_avatar($user->ID) . '</div>';
			echo '<div class="uzivatel_info"><div class="uzivatel_jmeno">' . esc_html( $user->display_name ) . '</div>';
			echo '<div class="uzivatel_tag"><div class="kontakt-'.$user->roles[0].'">' .translate_user_role( $wp_roles->roles[ $user->roles[0] ]['name'] ). '</div><div class="kontakt-'.$user->roles[1].'">' .translate_user_role( $wp_roles->roles[ $user->roles[1] ]['name'] ). '</div><div class="kontakt-'.$user->roles[2].'">' .translate_user_role( $wp_roles->roles[ $user->roles[2] ]['name'] ). '</div><div class="kontakt-'.$user->roles[3].'">' .translate_user_role( $wp_roles->roles[ $user->roles[3] ]['name'] ). '</div></div>';
			if ( $user->aim ) :
				echo '<div><img src="'.get_bloginfo('template_url').'/images/ikona_profil_telefon.png"> ' . esc_html( $user->aim ) . '</div>';		
			endif;
			if ( $user->user_email ) :
				echo '<div><img src="'.get_bloginfo('template_url').'/images/ikona_profil_email.png"> <a href="mailto:' . esc_html( $user->user_email ) . '" class="'. esc_html( $user->user_email ) .'">' . esc_html( $user->user_email ) . '</a></div>';
			endif;
			if ( in_array( 'zivotopis', (array) $user->roles ) ) {
				echo '<div class="uzivatel_zivotopis"><img src="'.get_bloginfo('template_url').'/images/ikona_profil_zivotopis.png"> <a href="'.get_site_url()."/".esc_html( $user->user_login ).'">Profesní životopis</a></div>';
			}
			echo '</div>';
			/*echo '<div>' . esc_html( $user->roles[1] ) . '</div>';*/
		}
		}
		/*
		if ( in_array( 'stanicni_sestra_a', (array) $user->roles ) || in_array( 'stanicni_sestra_b', (array) $user->roles ) && !in_array( 'stanicni_sestra', (array) $user->roles )) {
			echo '<div class="uzivatel_avatar">' .get_wp_user_avatar($user->ID) . '</div>';
			echo '<div class="uzivatel_info"><div class="uzivatel_jmeno">' . esc_html( $user->display_name ) . '</div>';
			echo '<div class="uzivatel_tag"><div class="kontakt-'.$user->roles[0].'">' .translate_user_role( $wp_roles->roles[ $user->roles[0] ]['name'] ). '</div><div class="kontakt-'.$user->roles[1].'">' .translate_user_role( $wp_roles->roles[ $user->roles[1] ]['name'] ). '</div><div class="kontakt-'.$user->roles[2].'">' .translate_user_role( $wp_roles->roles[ $user->roles[2] ]['name'] ). '</div><div class="kontakt-'.$user->roles[3].'">' .translate_user_role( $wp_roles->roles[ $user->roles[3] ]['name'] ). '</div></div>';
			echo '<div>' . esc_html( $user->aim ) . '</div>';		
			echo '<div><a href="mailto:' . esc_html( $user->user_email ) . '" class="'. esc_html( $user->user_email ) .'">' . esc_html( $user->user_email ) . '</a></div>';
			if ( in_array( 'zivotopis', (array) $user->roles ) ) {
				echo '<div><a href="'.get_site_url()."/".esc_html( $user->user_login ).'">Profesní životopis</a></div>';
			}
			echo '</div>';
			/*echo '<div>' . esc_html( $user->roles[1] ) . '</div>';*/
		/*}*/
		if (!is_page(array( 150146, 4054, 152883,  ) )) {
		if (in_array( 'stanicni_sestra_a', (array) $user->roles ) || in_array( 'stanicni_sestra_b', (array) $user->roles ) || in_array( 'stanicni_sestra_c', (array) $user->roles ) || in_array( 'stanicni_sestra_d', (array) $user->roles ) || in_array( 'stanicni_sestra_jip', (array) $user->roles ) || in_array( 'stanicni_sestra_amb', (array) $user->roles )) {
			echo '<div class="uzivatel_obal" style="padding: 0px 0px 0px 50px;">';
			echo '<div class="uzivatel_info" style=""><div class="uzivatel_jmeno"  style="width: 235px;">' . esc_html( $user->display_name ) . '</div>';
			echo '<div class="uzivatel_tag"><div class="kontakt-'.$user->roles[0].'">' .translate_user_role( $wp_roles->roles[ $user->roles[0] ]['name'] ). '</div><div class="kontakt-'.$user->roles[1].'">' .translate_user_role( $wp_roles->roles[ $user->roles[1] ]['name'] ). '</div><div class="kontakt-'.$user->roles[2].'">' .translate_user_role( $wp_roles->roles[ $user->roles[2] ]['name'] ). '</div><div class="kontakt-'.$user->roles[3].'">' .translate_user_role( $wp_roles->roles[ $user->roles[3] ]['name'] ). '</div></div></div>';
			/*echo '<div>' . esc_html( $user->roles[1] ) . '</div>';*/
		}
		}
		
		echo '</div>';
		}
		/* pro výpočet počtu výpisů echo $i;*/
		echo '</div>
	</div>
</section>';
}
elseif ( is_page(277)) {
	echo '<section class="box_hlavni_informace"><div class="box_hlavni_informace_obal">';
echo '<input type="text" id="searchbox" placeholder="Vyhledej soubory">
</section>';
}
?>
	