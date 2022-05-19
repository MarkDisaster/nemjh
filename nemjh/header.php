<!doctype html>
<html lang="cs">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=1">
<meta name="author" content="Marek Marek">
<meta name="description" content="<?php bloginfo('description'); ?>" />
	
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:url" content="<?php the_permalink() ?>" />
<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
<title><?php if ( is_home()) { bloginfo('name'); } else { bloginfo('name'); ?> &raquo; <?php the_title(); } ?></title>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFontConfig = {
      google: { families: [ 'Open+Sans:400,600,700', 'Oswald' ] },
      active:function(){document.cookie ='wfont=1; expires='+(new Date(new Date().getTime() + 86400000)).toGMTString()+'; path=/'}
    };
</script>
!-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Oswald:wght@400;500&display=swap" rel="stylesheet">


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W6RW96R');</script>
<!-- End Google Tag Manager -->
	
<!-- Hotjar Tracking Code for www.nemjh.cz -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2128694,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<?php wp_head(); ?>
<?php
if ( is_singular() && get_option( 'thread_comments' ) )
wp_enqueue_script( 'comment-reply' );
wp_head();
?>
<?php if ( is_home()) { ?>
<script>
/* Obrázky v headeru */			
$(document).ready(function() {
                $(".pozadi").backgroundCycle({
                    imageUrls: [
                        '<?php echo get_template_directory_uri(); ?>/images/hlavicka_pozadi_002.jpg',
                        '<?php echo get_template_directory_uri(); ?>/images/hlavicka_pozadi_003.jpg',
						'<?php echo get_template_directory_uri(); ?>/images/hlavicka_pozadi_001.jpg'
						],
                    fadeSpeed: 2200,
                    duration: 9000,
                    backgroundSize: SCALING_MODE_COVER = 2
                });
            });
</script>
<?php } ?>
</head>
<?php flush(); ?>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6RW96R"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="obal">
		<header class="logo_menu_obal3">
		<div id="logo_menu_obal2" class="logo_menu_obal2">
			<div id="logo_menu_obal" class="logo_menu_obal">
			<div id="hlavicka_logo" class="hlavicka_logo">
				<a href="<?php echo get_home_url(); ?>" class="logo">
					<img id="logo_img" src="<?php echo get_bloginfo('template_url'); ?>/images/hlavicka_logo_nemjh.svg" title="Nemocnice Jindřichův Hradec" alt="Nemocnice Jindřichův Hradec">
				</a>
			</div>
			<?php get_template_part('/template-parts/navigation', 'top'); ?>
			</div>
		</div>
	<?php if ( is_page_template('page-empty.php') || is_page_template('page-covid.php')) {}
			else { get_template_part('/template-parts/content', 'header'); }
	?>
</header>
<main>
