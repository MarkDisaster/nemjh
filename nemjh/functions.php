<?php
/*
	Šablona: nemjh
	Vytvořil: Marek Marek
*/

/* Povolení náhledu v příspěvku (post thumbnails) */
add_theme_support( 'post-thumbnails' );

/* Registrace horního menu*/
register_nav_menus( array(
		'hlavni_menu'    => __( 'Hlavní menu', 'nemjh' ),
	) );

register_nav_menus( array(
		'menu_zamestnanci'    => __( 'Menu pro zamestnance', 'nemjh' ),
	) );
   
register_nav_menus( array(
		'menu_covid19-portal'    => __( 'Menu Informační portál Covid-19', 'nemjh' ),
	) );

function nemjh_widgets_init() {

register_sidebar( array(
		'name'          => __( 'Stránka oddělení', 'nemjh' ),
		'id'            => 'sidebar_oddeleni',
		'description'   => __( 'Přidej widgety, které budou zobrazeny na stránce oddělení.', 'nemjh' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'Hlavní strana - boční panel', 'nemjh' ),
		'id'            => 'sidebar_hlavni_strana',
		'description'   => __( 'Přidej widgety, které budou zobrazeny na hlavní stránce v bočním panelu.', 'nemjh' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'Novinka - boční panel', 'nemjh' ),
		'id'            => 'sidebar_novinka',
		'description'   => __( 'Přidej widgety, které budou zobrazeny na hlavní stránce v bočním panelu.', 'nemjh' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

register_sidebar( array(
		'name'          => __( 'Covid-19', 'nemjh' ),
		'id'            => 'sidebar_covid',
		'description'   => __( 'Přidej widgety, které budou zobrazeny na stránce Covid-19 v bočním panelu.', 'nemjh' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
add_action( 'widgets_init', 'nemjh_widgets_init' );


/* Registrace jquery */
function wptuts_scripts_load_cdn()
{
    // Deregister the included library
    wp_deregister_script( 'jquery' );
	wp_deregister_script('jquery-migrate');
     
    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, false );
	
    
    /*// Register the script like this for a plugin:
    wp_register_script( 'custom-script', plugins_url( '/scripts/rozbalovaci_menu.js', __FILE__ ), array( 'jquery' ) );*/
     // or
    // Register the script like this for a theme:
    wp_register_script( 'rozbalovaci-menu-js', get_template_directory_uri() . '/scripts/rozbalovaci_menu.js', array( 'jquery' ), '1.0.0', true );
 
    wp_enqueue_script( 'rozbalovaci-menu-js' );
	
	wp_register_script( 'zmena-obrazku-header-js', get_template_directory_uri() . '/scripts/background.cycle.min.js', array( 'jquery' ), '1.0.0', true );
 
	if ( is_home() ) {
		wp_enqueue_script( 'zmena-obrazku-header-js' );
	}
	
	wp_register_script( 'nacteni-prispevku-js', get_template_directory_uri() . '/scripts/myloadmore.js', array( 'jquery' ), '1.0.0', true );
 
    if ( is_home() ) {
		wp_enqueue_script( 'nacteni-prispevku-js' );
	}
	
	wp_register_script( 'nacteni-qr-qrcodelib-js', get_template_directory_uri() . '/scripts/qr_reader_qrcodelib.js', array( 'jquery' ) );

	if ( is_page(154325) ) {
		wp_enqueue_script( 'nacteni-qr-qrcodelib-js' );
	}
	wp_register_script( 'nacteni-qr-webcodecamjs-js', get_template_directory_uri() . '/scripts/qr_reader_webcodecamjs.js', array( 'jquery' ) );

	if ( is_page(154325) ) {
    	wp_enqueue_script( 'nacteni-qr-webcodecamjs-js' );
	}
	/*
	wp_register_script( 'sticky-menu-js', get_template_directory_uri() . '/scripts/stickyfloat.js', array( 'jquery' ) );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'sticky-menu-js' );*/
	
	
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_load_cdn' );


/* Registrace css souborů*/
function wpse39130_register_more_stylesheets() {
	wp_register_style('rozbalovaci_menu_css', get_template_directory_uri() . '/styles/hlavni_menu.css', array(), '1.0', 'all');
	wp_register_style( 'hlavni_styl', get_stylesheet_directory_uri() . '/style.css',false,'2022.03.30.002','all');
    wp_register_style( 'hlavni_strana', get_stylesheet_directory_uri() . '/styles/hlavni_strana.css',false,'1.0','all');
	wp_register_style( 'novinka', get_stylesheet_directory_uri() . '/styles/novinka.css',false,'1.0','all');
	wp_register_style( 'archive', get_stylesheet_directory_uri() . '/styles/archive.css',false,'1.0','all');
	wp_register_style( 'oddeleni', get_stylesheet_directory_uri() . '/styles/oddeleni.css',false,'1.0','all');
	wp_register_style( 'page', get_stylesheet_directory_uri() . '/styles/page.css',false,'1.0','all');
	wp_register_style( 'search', get_stylesheet_directory_uri() . '/styles/search.css',false,'1.0','all');
	wp_register_style( 'erecept', get_stylesheet_directory_uri() . '/styles/erecept.css',false,'1.0','all');
}
add_action( 'init', 'wpse39130_register_more_stylesheets' );

/* Použití css souborů na určitých stránkách */
function wpse39130_conditionally_enqueue_my_stylesheet() {
    // only enqueue on product-services page slug
		wp_enqueue_style( 'hlavni_styl' );
		wp_enqueue_style( 'rozbalovaci_menu_css' );
	
	if ( is_home() ) {
        wp_enqueue_style( 'hlavni_strana' );
    }
	
	if ( is_single() ) {
        wp_enqueue_style( 'novinka' );
    }
	
	if ( is_page() ) {
        wp_enqueue_style('page');
    }
	
	if ( is_archive() ) {
        wp_enqueue_style('archive');
    }
	
	if ( is_page_template('oddeleni.php') ) {
        wp_enqueue_style('oddeleni');
    }
	
	if ( is_page_template('page-empty.php') ) {
        wp_enqueue_style('erecept');
    }
	
	if ( is_search() ) {
        wp_enqueue_style('search');
    }
}
add_action( 'wp_enqueue_scripts', 'wpse39130_conditionally_enqueue_my_stylesheet' );



/*funkční Smazání načítání scriptů do headeru mimo hlavní stránku*/
add_action('wp_enqueue_scripts', 'swellfire_load_scripts');
function swellfire_load_scripts(){
    /*if (!is_page(1384) && !is_page(33) && !is_page(113) && !is_page(1513) && !is_page(1285)) {*/
	wp_dequeue_script( 'wpfb-live-admin' ); 
	wp_dequeue_script( 'wpfb' ); 
	wp_deregister_script( 'wp-embed' );
	wp_dequeue_style('wpfb-live-admin');
	wp_dequeue_style('wpfb');
	wp_deregister_style('wp-block-library'); // WordPress core
	/*}*/
}



/* Drobečková navigace */
function custom_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Hlavní strana</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        the_category(' / ');
            if (is_single()) {
                echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;Vyhledáno: ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/* Zobrazení nejvyšší kategorie příspěvku*/

/* Načtení dalších příspěvků */
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '7',
        'paged' => $paged,
		'category__in' => array(3,17)
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) :
        ?>
        <?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
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
        <?php endwhile ?>
        <?php
    endif;
 
    wp_die();
}



/* Přesměrování uživatele po přihlášení *//*
function my_login_redirect( $redirect_to, $request, $user ){
    //is there a user to check?
    if( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
		 if( in_array( "administrator", $user->roles ) ) {
            // redirect them to the default place
            return 'wp-admin';
        }
		 else {
            return home_url();
        }
    }
    else {
        return $redirect_to;
    }
}

add_filter("login_redirect", "my_login_redirect", 3, 4); /** ID uzivatelů k přesměrování **/

/* Tohle dát do kupy*/
function role_exists( $role ) {

  if( ! empty( $role ) ) {
    return $GLOBALS['wp_roles']->is_role( $role );
  }
  
  return false;
}


/* Řazení příspěvků archivu Ordinačních hodin a Dokumentů ke stažení */
add_filter('pre_get_posts', 'pre_get_posts_hook' );

function pre_get_posts_hook($wp_query) {
    if (is_category('ordinacni-hodiny') || is_category('dokumenty'))
    {
        $wp_query->set( 'orderby', 'title' );
        $wp_query->set( 'order', 'ASC' );
        return $wp_query;
    }
}


/* Použití Envira Lightboxu na fotky mimo envira gallery *//*
function envira_gallery_launch_lightbox( $data ) {
	?>
	<script>
		jQuery(document).ready(function($) {
			$('.envirabox').on('click', function(e) {
				e.preventDefault();
				$('#envira-gallery-'+$(this).data('envira-gallery-id')+' > div:first-child a').envirabox().click();
			});
		});
	</script>
	<?php
}
add_filter( 'wp_footer', 'envira_gallery_launch_lightbox' );*/

/* Odtranění stránek z vyhledávání */
function fb_search_filter($query) {

    if ( !$query->is_admin && $query->is_search) {
        $query->set('post__not_in',array( 75, 71, 919, 343, 502 ) ); /* ID stránek */
    }

    return $query;
}
add_filter( 'pre_get_posts', 'fb_search_filter' );

/* Odtranění kategorií příspěvků z vyhledávání */
function exclude_category_from_search($query) {
	if ($query->is_search) {
		$cat_id = get_cat_ID('politics');
		$query->set('cat', '-74');
	}
	return $query;
}
add_filter('pre_get_posts','exclude_category_from_search');


add_filter( 'the_posts', function( $posts, $q ) 
{
    if( $q->is_main_query() && $q->is_search() ) 
    {
        usort( $posts, function( $a, $b ){
            /**
             * Sort by post type. If the post type between two posts are the same
             * sort by post date. Make sure you change your post types according to 
             * your specific post types. This is my post types on my test site
             */
            $post_types = [
                'page'		 => 1,
                'post'       => 2,
                'cameras'    => 3
            ];              
            if ( $post_types[$a->post_type] != $post_types[$b->post_type] ) {
                return $post_types[$a->post_type] - $post_types[$b->post_type];
            } else {
                return $a->post_date < $b->post_date; // Change to > if you need oldest posts first
            }
        });
    }
    return $posts;
}, 10, 2 );


/* Přidá category tag do <body> */
add_filter('body_class','add_category_to_single');
  function add_category_to_single($classes) {
    if (is_single() ) {
      global $post;
      foreach((get_the_category($post->ID)) as $category) {
        // add category slug to the $classes array
        $classes[] = $category->category_nicename;
      }
    }
    // return the $classes array
    return $classes;
  }


/* LAZY LOADING ATTRIBUTE PRO OBRÁZKY */
add_filter( 'post_thumbnail_html', 'wpdd_modify_post_thumbnail_html', 10, 5 );
/**
 * Add `loading="lazy"` attribute to images output by the_post_thumbnail().
 *
 * @param  string $html	The post thumbnail HTML.
 * @param  int $post_id	The post ID.
 * @param  string $post_thumbnail_id	The post thumbnail ID.
 * @param  string|array $size	The post thumbnail size. Image size or array of width and height values (in that order). Default 'post-thumbnail'.
 * @param  string $attr	Query string of attributes.
 * 
 * @return string	The modified post thumbnail HTML.
 */
function wpdd_modify_post_thumbnail_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {

	return str_replace( '<img', '<img loading="lazy"', $html );

}
?>

