<?php
$uriSegments = explode("/", get_permalink());
/*echo $uriSegments[3];*/
if( role_exists($uriSegments[3].'_downloads') ) {
echo '<section class="kestazeni"><header class="header100">
<h2 class="nadpis100" id="kestazeni">Ke stažení</h2>
</header>
<table>
	<thead>
		<tr>
			<th></th>
			<th>Název</th>
			<th>Kategorie</th>
			<th>Poslední změna</th>
			<th>Velikost</th>
		</tr>
	</thead>
<tbody>' ?>
<?php /* ZOBRAZENÍ INFORMACE PRO PACIENTY V DOKUMENTECH KE STAŽENÍ NA KAŽDÉ STRÁNCE MIMO TYTO */
	if ( !is_page( array( 150637, 1120, 6448, 152776, 484)))  {
		echo do_shortcode( '[wpfilebase tag=list path='.$uriSegments[3].' pagenav=1 /]' ).do_shortcode( '[wpfilebase tpl=simple tag=list id=9 pagenav=1 /]' );
	}
	elseif ( is_page(150637)) {
		echo do_shortcode( '[wpfilebase tag=list path=rdg/'.$uriSegments[3].' pagenav=1 /]' ).do_shortcode( '[wpfilebase tpl=simple tag=list id=9 pagenav=1 /]' );
	}
/* ZOBRAZÍ DOKUMENTY KE STAŽENÍ BEZ INFORMACÍ PRO PACIENTA NA DANÉ STRÁNCE*/
elseif ( is_page(array (1120, 6448, 152776, 484))) {
echo do_shortcode( '[wpfilebase tag=list path='.$uriSegments[3].' pagenav=1 sort=">file_name" /]' );
}?>
<?php echo '</tbody>
</table>
</section>';
	}
/*else {
	echo '<div>ŽÁDNÉ SOUBORY KE STAŽENÍ!</div>';
}*/
	?>