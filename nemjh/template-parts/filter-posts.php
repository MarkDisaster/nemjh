<script>
	 $(function() {
		$('#cat').change(function(){
			$('.ambulance, .article').hide();
			$('.' + $(this).val()).show();
		});
	});
</script>
<div class="box_post_filtr_obal">
	<?php
		if ( is_category('novinky') || is_category('ordinacni-hodiny') || is_category('dokumenty')) {
			$wptitle = 'Všechny '.wp_title('', 0);
		}
		else {
			$wptitle = 'Všechny nabídky práce';
		}
	
		$category = get_queried_object();
		/*echo $category->term_id;*/
		$args = array(
		'show_option_none' => $wptitle,
		/*'show_count'       => 1,*/
		'child_of'         => $category->term_id,
		'orderby'          => 'name',
		'echo'             => 0,
		);

		$select  = wp_dropdown_categories( $args );
		echo $select;
	?>
</div>