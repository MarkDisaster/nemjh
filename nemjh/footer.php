		<footer>
			<div class="paticka_obal">
				<div class="paticka_logo">
					<a href="<?php echo get_home_url(); ?>" class="logo">
						<img src="<?php echo get_bloginfo('template_url'); ?>/images/paticka_logo_nemjh.svg" loading="lazy" title="Nemocnice Jindřichův Hradec" alt="Nemocnice Jindřichův Hradec">
					</a>
				</div>
				<!-- <nav class="paticka_navigace">paticka navigace</nav> !-->
				<adress>
					<?php query_posts('cat=77&posts_per_page=4&order=DESC&orderby=modified'); ?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</adress>
				<div class="paticka_socialni_site">
					<a href="https://facebook.com/nemjhcz" class="nohover" rel="noopener" target="_blank">
						<img src="<?php echo get_bloginfo('template_url'); ?>/images/ikona_facebook.png" loading="lazy" title="Facebook Nemocnice Jindřichův Hradec" alt="Facebook Nemocnice Jindřichův Hradec">
					</a>
					<a href="https://instagram.com/nemjhcz" class="nohover" rel="noopener" target="_blank">
						<img src="<?php echo get_bloginfo('template_url'); ?>/images/ikona_instagram.png" loading="lazy" title="Instagram Nemocnice Jindřichův Hradec" alt="Instagram Nemocnice Jindřichův Hradec">
					</a>
					<a href="https://www.youtube.com/channel/UCWvB4DNH6nSpSVe1DiOCxrQ" class="nohover" rel="noopener" target="_blank">
						<img src="<?php echo get_bloginfo('template_url'); ?>/images/ikona_youtube.png" loading="lazy" title="YouTube Nemocnice Jindřichův Hradec" alt="YouTube Nemocnice Jindřichův Hradec">
					</a>
				</div>
				<div class="paticka_socialni_site pro-zamestnance">
					<nav id="" class="">
						<div>Pro zaměstnance:</div>
						<?php wp_nav_menu( array(
							'theme_location' => 'menu_zamestnanci',
							'menu_id'        => 'menu_zamestnanci',
						) ); ?>
					</nav>
				</div>
			</div>
			<div class="copyright">
				<div>
					<?php query_posts('cat=78&posts_per_page=1'); ?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</footer>
<?php
	wp_footer();
?>
</div>
</body>
</html>
