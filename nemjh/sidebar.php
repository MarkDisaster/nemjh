<?php if ( is_active_sidebar( 'sidebar_hlavni_strana' ) && !is_single() && !is_page_template('oddeleni.php')&& !is_page_template('page-covid.php') && !is_category(113) ) : ?>
	<aside>
		<div class="bocni_panel_obal">
		<?php dynamic_sidebar( 'sidebar_hlavni_strana' ); ?>
		</div>
	</aside>

<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar_oddeleni' ) && !is_single() ) : ?>
	<aside>
		<div class="bocni_panel_obal">
		<?php dynamic_sidebar( 'sidebar_oddeleni' ); ?>
		</div>
	</aside>

<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar_novinka' ) && is_single() && !is_category(113) ) : ?>
	<?php dynamic_sidebar( 'sidebar_novinka' ); ?>
<?php endif; ?>

<?php if ( is_category(113) ) : ?>
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