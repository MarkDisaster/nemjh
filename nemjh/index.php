<?php
/* ****************************************

	Template: NEMJH
	Soubor: index.php
	Vytvoril: Marek Marek

**************************************** */

get_header(); ?>	
		<section class="box_hlavni_informace"><div class="box_hlavni_informace_obal">
			<?php $argss = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'posts_per_page' => '2',
							'paged' => 1,
							'order' => 'DESC',
							'orderby' => 'title',
							'category__in' => array(71)
						);
						$my_postss = new WP_Query( $argss );
						if ( $my_postss->have_posts() ) : 
						?>
						<?php while ( $my_postss->have_posts() ) : $my_postss->the_post() ?>
						<?php get_template_part('/template-parts/article', 'top'); ?>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
			</section>
			<section class="aktuality">
				<div id="aktuality_bocni_panel_obal" class="aktuality_bocni_panel_obal">
					<div class="aktuality_obal">
						<h2>Aktuality</h2>		
						<?php 
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'posts_per_page' => '7',
							'paged' => 1,
							'category__in' => array(3)
						);
						$my_posts = new WP_Query( $args );
						if ( $my_posts->have_posts() ) : 
						?>
						<?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
						<?php get_template_part('/template-parts/article'); ?>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
						<div class="dalsi_prispevky"><div class="tl_dalsi_prispevky nacti_prispevky">&middot;&middot;&middot;</div><br><p class="link_dalsi_prispevky nacti_prispevky">DALŠÍ AKTUALITY</p></div>
					</div>
					
					<script type="text/javascript">
						var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
						var page = 2;
						jQuery(function($) {
							$('body').on('click', '.nacti_prispevky', function() {
								var data = {
									'action': 'load_posts_by_ajax',
									'page': page,
									'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
								};

								$.post(ajaxurl, data, function(response) {
									$('.dalsi_prispevky').before(response);
									page++;
								});
							});
						});
						</script>
					<?php get_sidebar('sidebar_hlavni_strana'); ?>
				</div>
			</section>
			<div id="stop"></div>
			<section class="banner_nabidka_prace">
				<div class="banner_nabidka_prace_obal">
					<div class="banner_nabidka_prace_obal_levy">
					<h2>Staň se členem<br>našeho týmu</h2>
					<img src="<?php echo get_bloginfo('template_url'); ?>/images/ikona_nabidka_prace.png" class="ikona_volna_mista">
					<a href="<?php echo get_home_url(); ?>/prace" class="nabidka_prace_odkaz">Volná místa</a>
					</div>
					<?php query_posts('cat=72&posts_per_page=1&order=DESC&orderby=title'); ?>
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="banner_nabidka_prace_obal_pravy">
									<header>
										<h2><?php the_title(); ?></h2>
									</header>
									<div><?php the_content(); ?></div>
								</div>
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>
			<section class="banner_lekarna">
				
				<div class="banner_lekarna_obal">
					<h2><a href="<?php get_home_url(); ?>/lek" title="Nemocniční lékárna" alt="Nemocniční lékárna">Nemocniční lékárna</a></h2>
					<?php query_posts('cat=74&posts_per_page=3&order=ASC&orderby=modified'); ?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="obal33">
							<?php the_post_thumbnail(); ?>
							<header>
								<h3><?php the_title(); ?></h3>
							</header>
							<div><?php the_content(); ?></div>
						</div>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
				</div>
			</section>
			<section class="banner_povinna_publicita">
				<div class="banner_povinna_publicita_obal">
					<h2><a href="<?php get_home_url(); ?>/partneri/">Partneři</a></h2>
					<?php query_posts('cat=75&order=ASC&orderby=date'); ?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>
			<section class="banner_statistiky">
				<div class="banner_statistiky_obal">
					<?php query_posts('cat=76&posts_per_page=4&order=ASC&orderby=date'); ?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="obal25">
							<div><?php the_content(); ?></div>
							<header>
								<h3><?php the_title(); ?></h3>
							</header>							
						</div>
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>
		</main>
		<?php get_footer(); ?>
