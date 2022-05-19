<?php /* ****************************************

	Template: NEMJH
	Soubor: template-parts/article-single.php
	Vytvoril: Marek Marek

**************************************** */
?>
<article>
	<header><?php if ( is_page_template('oddeleni.php') ) {
				/*cho "<h2>Popis oddělení</h2>";*/
				}
				/*elseif (is_page(6086)) { echo 'Nemocnice Jindřichův Hradec, a.s.'; }*/
				else {/* echo the_title('<h2>', '</h2>'); */} ?>

		<?php
		if ( is_single() ) { ?>
        <time><?php the_time('j. F Y G:i') ?>&nbsp;&nbsp;</time>
    	<?php } ?>
		<?php edit_post_link('Upravit'); ?>
	</header>
	<div class="clanek_prefix"><?php the_content('Přečíst &raquo;'); ?></div>
</article>