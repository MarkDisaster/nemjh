<?php 
$args = array(
	'parent' => 	113,
	'orderby' => 'description'
);
$categories = get_categories( $args );

echo '<ul id="filtr_prispevku_radio" class="filtr_prispevku_radio">';
echo '<li><input type="radio" value="" id="filter-checkall" class="filter-checkall" name="filtrbox" checked /><label for="filter-checkall">Všechny profese</label></li>';
foreach($categories as $category) { 
	echo '<li><input type="radio" value="'. $category->term_id .'" class="filtrbox" name="filtrbox" id="filter-'.$category->term_id.'" /><label for="filter-'.$category->term_id.'">'.$category->name.'</label></li>';

	//echo 'Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name, $category->term_id ) . '" ' . '>' . $category->name.'</a> </li> ';		
	//echo '<p> Description:'. $category->description . '</p>';
	//echo '<p> Post Count: '. $category->count . '</p>'; 

}
echo '</ul>'
?>
<script>
	$(document).ready(function(){
    $('.filtr_prispevku_radio input.filtrbox').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $("article").not(targetBox).hide();
        $(targetBox).show();
    });
		
	$('.filtr_prispevku_radio input.filter-checkall').click(function(){
        $("article").show();
    });
	
});
</script>