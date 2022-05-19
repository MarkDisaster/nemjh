<?php
/* ****************************************

	Template: NEMJH
	Soubor: single.php
	Vytvoril: Marek Marek
	Popis:
	
**************************************** */

get_header(); ?>
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
		
		<?php if ( !in_category(113) ) : ?>
		<aside>
			<div class="bocni_panel_obal">	
				<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
				<article>
				<div class="clanek_nahled_datum">
					<?php if ( !in_category(75) ) : ?>
						<time><?php  the_time('j. M'); ?></time>
					<?php endif; ?>
					<div class="clanek_nahled">

						<?php if ( has_post_thumbnail()) :
						the_post_thumbnail('thumbnail');
						else : ?>
						<!--<img src="<?php echo get_bloginfo('template_url'); ?>/images/nahled-default.jpg" alt="náhled chybí" /> -->
						<?php endif; ?>
					</div>
				</div>
				<header>
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<div class="clanek_prefix">
						<?php the_content(''); ?>
						<p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Přečíst</a><?php edit_post_link('Upravit', '&nbsp;&nbsp;'); ?></p>
					</div>
				</header>
			</article>
			<?php } wp_reset_postdata(); ?>
			<?php get_sidebar('sidebar_novinka'); ?>
			</div>
		</aside>
	<?php endif; ?>
	<?php if ( in_category(113) ) : ?>	
		<aside>
			<div class="bocni_panel_obal">
				<?php query_posts('cat=72&posts_per_page=1&order=DESC&orderby=title'); ?>
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="banner_nabidka_prace_obal_pravy aside_vyrazne">
								<header>
									<h2><?php the_title(); ?></h2>
								</header>
								<div><?php the_content(); ?></div>
							</div>
					<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</aside>
	<?php endif; ?>
	</div>
</section>



</main>
<?php get_footer(); ?>
