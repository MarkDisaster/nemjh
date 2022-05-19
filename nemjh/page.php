<?php
/* ****************************************

	Template: NEMJH
	Soubor: page.php
	Vytvoril: Marek Marek
	Popis:
	
**************************************** */

get_header();

$uriSegments = explode("/", get_permalink());
/*echo $uriSegments[3]; //returns bar*/
?>
<?php get_template_part('/template-parts/content', 'top'); ?>
<?php get_template_part('/template-parts/breadcrumb'); ?>
<section class="aktuality">
	<div class="aktuality_bocni_panel_obal">
		<?php if ( !is_page(array(277, 902, 1120))) { ?>
			<div class="aktuality_obal">
		<?php }
		else { ?>
		<?php } ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('/template-parts/article', 'single'); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		
		<?php if ( !is_page(array(277, 902, 1120))) { ?>
		</div>
		<?php get_sidebar('sidebar_hlavni_strana'); ?>
		<?php }
		else { ?>
		<?php } ?>
	</div>
</section>
<div id="stop"></div>
<?php if ( is_page(array(902))) { ?>
<?php get_template_part('/template-parts/content', 'contacts-vedmanagement'); ?>
<?php } ?>
<?php get_template_part('/template-parts/content', 'download'); ?>
</main>
<?php get_footer(); ?>



<?php if ( is_page( 'Kontakt' ) ) : ?>
		<?php echo get_template_part('/template-parts/content', 'contacts-vedeni'); ?>
   		<?php else : ?>
<?php endif; ?>