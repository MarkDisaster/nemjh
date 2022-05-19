<?php
/* ****************************************

	Template: NEMJH
	Soubor: search.php
	Vytvoril: Marek Marek

**************************************** */

get_header(); ?>
<?php get_template_part('/template-parts/breadcrumb'); ?>
<section class="aktuality">
				<div class="aktuality_bocni_panel_obal">
					<div class="aktuality_obal">
						<h2><?php printf( __('Vyhledáno: %s'), get_search_query() ); ?></h2>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('/template-parts/article', 'search'); ?>
						<?php endwhile; ?>
						<?php else : ?>
						<h1 class="search-nadpis">Hledané slovo nebylo nalezeno.</h1>
						<span class="text-post">Omlouváme se, ale to co hledáte zde nejspíš není...</span>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
						
						<?php
						
						
?>
					</div>
					<?php get_sidebar('sidebar_hlavni_strana'); ?>
				</div>
			</section>

		</main>
		<?php get_footer(); ?>
