<?php
global $post;
$postcat = get_the_category( $post->ID );
?>
<article class="article <?php echo esc_html( $postcat[0]->term_id ) .' '. esc_html( $postcat[1]->term_id ).' '. esc_html( $postcat[2]->term_id ); ?> -1">
	<div class="clanek_nahled_datum">
		<time><?php  the_time('j. M'); ?></time>
		<?php if ( has_post_thumbnail()) { ?>
			<div class="clanek_nahled">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div>
		<?php } else { ?>
	<!-- nic !-->
	<?php } ?>
	</div>
	<header>
		<?php if (has_category()) { ?>
			<?php $categories = wp_get_post_terms( get_the_id(), 'category' );
			if ( $categories ):
				foreach ( $categories as $category ): ?>
					<a href="<?php echo get_term_link( $category->term_id, 'category' ); ?>" class="kategorie_tag <?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
				<?php endforeach;
			endif; ?>
		<?php } else { ?>
	<!-- nic !-->
	<?php } ?>
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<div class="clanek_prefix">
			<?php the_content(''); ?>
			<p class="clanek_precist"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Přečíst</a> <?php edit_post_link('Upravit', '&nbsp;&nbsp;'); ?></p>
		</div>
	</header>
</article>