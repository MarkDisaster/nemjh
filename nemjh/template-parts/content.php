<article>
	<div class="clanek_nahled_datum">
		<time><?php  the_time('j. M'); ?></time>
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