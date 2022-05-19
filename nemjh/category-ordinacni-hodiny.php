<?php
/* ****************************************
	Template: NEMJH
	Soubor: archive.php
	Vytvoril: Marek Marek

**************************************** */

get_header(); ?>
<section class="box_hlavni_informace"><div class="box_hlavni_informace_obal">
<?php get_template_part('/template-parts/filter', 'posts'); ?>
</section>

<?php get_template_part('/template-parts/breadcrumb'); ?>
	<section class="aktuality">
		<div class="aktuality_bocni_panel_obal">
			<?php query_posts('cat=87&orderby=title&order=ASC'); ?>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php if ( is_category('ordinacni-hodiny')) { ?>
				<?php get_template_part('/template-parts/article', 'top'); ?>
				<?php }
				else { ?>
				<?php get_template_part('/template-parts/article'); ?>
				<?php } ?>
				<?php endwhile; ?>
				<?php endif ?>
				<?php wp_reset_query(); ?>
		</div>
	</section>


</main>
<?php get_footer(); ?>
