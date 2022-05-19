<?php
/* ****************************************
	Template: NEMJH
	Template Name: Prázdná stránka
	Soubor: page-empty.php
	Vytvoril: Marek Marek

**************************************** */

get_header(); ?>
<?php get_template_part('/template-parts/breadcrumb'); ?>
	<section class="aktuality">
		<div class="aktuality_bocni_panel_obal">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('/template-parts/article', 'single'); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

</main>
<?php get_footer(); ?>
