<?php
/* ****************************************
	Template: NEMJH
	Soubor: archive.php
	Vytvoril: Marek Marek

**************************************** */

get_header(); ?>
<section class="box_hlavni_informace"><div class="box_hlavni_informace_obal">
	<?php if ( is_category('prace')) {
		get_template_part('/template-parts/filter-posts', 'radio'); 
	}
	
	elseif ( is_category('covid-19')) {
		get_template_part('/template-parts/navigation', 'covid19'); 
	}
	else {
		get_template_part('/template-parts/filter', 'posts');
	} ?>
</section>

<?php get_template_part('/template-parts/breadcrumb'); ?>
	<section class="aktuality">
		<div class="aktuality_bocni_panel_obal">
			<?php if ( is_category('ordinacni-hodiny') || is_category('dokumenty')) { ?>
			<?php }
			else { ?>
				<div class="aktuality_obal">
			<?php } ?>
			
			<?php if ( is_category('ordinacni-hodiny') || is_category('dokumenty')) {

			add_action( 'pre_get_posts', 'my_change_sort_order'); 
    		function my_change_sort_order($query){
				if(is_archive()):
				//If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
				//Set the order ASC or DESC
				$query->set( 'order', 'DESC' );
				//Set the orderby
				$query->set( 'orderby', 'title' );
				endif;    
			};
	
			} ?>
			
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php if ( is_category('ordinacni-hodiny') || is_category('dokumenty')) { ?>
				<?php get_template_part('/template-parts/article', 'top'); ?>
				<?php }
				else { ?>
				<?php get_template_part('/template-parts/article'); ?>
				<?php } ?>
				<?php endwhile; ?>
				<?php endif ?>
			<?php if ( is_category('ordinacni-hodiny') || is_category('dokumenty')) { ?>
			<?php }
			else { ?>
				</div>
			<?php get_sidebar('sidebar_hlavni_strana'); ?>
			<?php } ?>
		</div>
	</section>


</main>
<?php get_footer(); ?>
