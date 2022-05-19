<?php
/* ****************************************
	Template Name: Oddělení

	Template: NEMJH
	Soubor: oddeleni.php
	Vytvoril: Marek Marek
	Popis: Šablona pro 
	
**************************************** */

get_header();
$uriSegments = explode("/", get_permalink());
/*echo $uriSegments[3];*/
?>
<?php get_template_part('/template-parts/content', 'top'); ?>
<?php get_template_part('/template-parts/breadcrumb'); ?>
<section class="aktuality">
	<div class="aktuality_bocni_panel_obal">
		<div class="aktuality_obal">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('/template-parts/article', 'single'); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar('sidebar-oddeleni'); ?>
	</div>
</section>
<div id="stop"></div>
<?php if ( !is_page( array( 246, 3657, 150443, 153179))) { ?>
	<section class="provozni_doby">
		<?php query_posts('category_name='.$uriSegments[3].''); ?>
			<?php if (have_posts()) : ?>
				<h2 class="nadpis100" id="ordinacni_hodiny">Ordinační hodiny</h2>
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('/template-parts/article', 'top'); ?>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</section>
<?php }
elseif ( is_page( array( 150443, 3657, 246)) && !is_page( array( 153179))) { ?>
	<section class="provozni_doby">
		<?php query_posts('category_name='.$uriSegments[3].''); ?>
			<?php if (have_posts()) : ?>
				<h2 class="nadpis100" id="ordinacni_hodiny">Provozní doby</h2>
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('/template-parts/article', 'top'); ?>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</section>
<?php } ?>

<?php if ( !is_page( 246 ) ) : ?>
		<?php get_template_part('/template-parts/content', 'download'); ?>
<?php else : ?>
<?php endif; ?>

<?php if ( is_page( 'Kontakt' ) ) : ?>
		<?php echo get_template_part('/template-parts/content', 'contacts-vedeni'); ?>

<?php else : ?>
     	<?php echo get_template_part('/template-parts/content', 'contacts'); ?>

<?php endif; ?>

<?php if ( is_page( 153179 ) ) : ?>
	<section class="sponzoring">
		<?php query_posts('category_name='.$uriSegments[3].''); ?>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<h2 class="nadpis100" id="ordinacni_hodiny"><?php the_title(); ?></h2>
				<div><?php the_content(); ?><p><?php edit_post_link('Upravit'); ?></p></div>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</section>
<?php endif; ?>
</main>
<?php get_footer(); ?>
