<?php
/* ****************************************
	Template: NEMJH
	Template Name: Covid-19-nova
	Soubor: page-covid19.php
	Vytvoril: Marek Marek

**************************************** */

get_header(); ?>
<style>
main * {
box-sizing: border-box;
}

.hlavicka_logo {
   display: inline-block;
}

.page-id-156280 #nav_hlavni_menu,
.page-id-156280 #title,
.page-id-155226 section.aktuality,
.logo_menu_obal3 {
   display: none;
}

.page-id-155226 .hlavni_menu {
   min-height: 450px;
}

.header-title {
   width: 100%;
   background: #4d97e3;
   text-align: center;
}

main div.title {
    width: calc(100% - 440px);
    padding-right: 220px;
    display: inline-block;
    position: unset;
    max-width: auto;
    
   margin: 25px 0px;
}

main h1 {
background: none;
    font-size: 1.875rem;
    padding: 0;
    margin: 0 auto;
    display: block;
    top: unset;
    max-width: unset;
}

main .aktuality h2 {
   color: #beaf03 /*!important*/;
   line-height: 2.5rem !important;
   letter-spacing: 0rem !important;
   width: 100%;
   padding: 0px 250px 20px 0px;
   text-align: left;
}

main nav.hlavni_menu,
main nav ul {
   margin: 0;
   padding: 0;
   text-align: center;
   min-width: 350px;
   display: inline-block;
}

main nav.hlavni_menu {
   max-height: none;
   padding: 40px 0px 90px 0px;
   max-width: 1200px;
   text-align: center;
   margin: 0 auto;
   display: block;
}

main nav li {
   display: inline-block;
   height: 80px;
   width: 350px;
   border: 3px solid #4d97e3;
   text-align: left;
   margin: 10px;
}

main nav li a {
   position: relative;
   font-size: 1.563rem;
   line-height: normal !important;
   padding: 10px 15px 0px 15px !important;
}

.hlavni_menu .current-menu-item, .hlavni_menu > div > ul > li:hover {
   background-color: #4d97e3;
}

main nav li a:after,
main nav li a:hover:after {
   position: absolute;
   line-height: normal;
   top: 40px;
   left: 75px;
   font-size: 0.938rem;
}

main nav li a:before,
main nav li a:hover:before {
content: "";
    display: block;
    width: 50px;
    height: 50px;
    float: left;
    margin-top: 3px;
    padding-right: 10px;
}

main nav li.odbery a:after,
main nav li.odbery:hover a:after {
   content: '(PCR TESTY, ANTIGENNÍ TESTY)';
}

main nav li.odbery-dacice a:after,
main nav li.odbery-dacice:hover a:after {
   content: '(PCR TESTY)';
}

main nav li.odbery a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-head-ear-stick-black.svg) no-repeat;
   background-size: contain;
}

main nav li.odbery.current-menu-item a:before,
main nav li.odbery:hover a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-head-ear-stick-white.svg) no-repeat;
   background-size: contain;
}

main nav li.ockovani a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-ocko-black.svg) no-repeat;
   background-size: contain;
}

main nav li.ockovani.current-menu-item a:before,
main nav li.ockovani:hover a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-ocko-white.svg) no-repeat;
   background-size: contain;
}

main nav li.testovani-protilatek a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-testovani-protilatek-black.svg) no-repeat;
   background-size: contain;
}

main nav li.testovani-protilatek.current-menu-item a:before,
main nav li.testovani-protilatek:hover a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-testovani-protilatek-white.svg) no-repeat;
   background-size: contain;
}

main nav li.ockovaci-certifikat a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-certificate-black.svg) no-repeat;
   background-size: contain;
}

main nav li.ockovaci-certifikat.current-menu-item a:before,
main nav li.ockovaci-certifikat:hover a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-certificate-white.svg) no-repeat;
   background-size: contain;
}

main nav li.ostatni-informace a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-info-black.svg) no-repeat;
   background-size: contain;
}

main nav li.ostatni-informace.current-menu-item a:before,
main nav li.ostatni-informace:hover a:before {
   background: url(https://nemjh.cz/wp-content/themes/nemjh/images/icon-info-white.svg) no-repeat;
   background-size: contain;
}

main nav li.ockovani a:after,
main nav li.ockovani a:hover:after {
   content: '(OČKOVACÍ CENTRUM)';
}

main nav li.testovani-protilatek a:after,
main nav li.testovani-protilatek a:hover:after {
   content: '(PRO SAMOPLÁTCE)';
}

main nav li.ockovaci-certifikat a:after,
main nav li.ockovaci-certifikat a:hover:after {
   content: '(OČKOVACÍ PORTÁL OBČANA)';
}

main nav li.ostatni-informace a:after,
main nav li.ostatni-informace a:hover:after {
   content: '(INFORMACE KE COVID-19)';
}

.aktuality {
   max-width: 990px;
}

.clanek_prefix {
   padding: 0;
}

.info-box {
   background-color: #efc902;
   border: 2px solid #998d00;
   padding: 30px 20px;
}

.info-box img.ikona {
   display: inline-block;
   vertical-align: top;
   padding-top: 5px;
   width: 55px;
   height: auto;
}

.info-box ul,
.info-box ol,
.info-box p {
   display: inline-block;
   vertical-align: top;
}

.info-box ul,
.info-box ol {
   width: calc(100% - 70px);
}

.ikona-mala {
   width: 16px;
   height: auto;
   vertical-align: text-top;
   padding-top: 2px;
   margin-right: 8px;
}

table td:first-child {
   width: 200px;
}

.page-id-156280 .aktuality{
   max-width: none !important;
}

@media screen and (max-width: 1080px) {
   html {
      font-size: 100%;
   }

   #nav_hlavni_menu {
       margin: 0 auto;
   }
   
   main .aktuality h2 {
      padding: 0px 0px 20px 0px
   }
}

@media screen and (max-width: 960px) {
   .hlavni-menu-ikona-001 {
      display: none;   
   }

   
   #hlavicka_logo {
      margin-top: 15px;
      float: none;
   }
   
   main div.title {
      width: 100%;
      padding: 0;
   }
   
   #nav_hlavni_menu {
      width: 100%;
   }
   
}

@media screen and (max-width: 600px) {
   html {
    font-size: 100%;
}
}


</style>
<header>
   <div class="header-title">
      <div id="hlavicka_logo" class="hlavicka_logo" style="margin: 25px 0px;">
         <a href="https://www.nemjh.cz" class="logo">
            <img id="logo_img" src="https://www.nemjh.cz/wp-content/themes/nemjh/images/logo-nemjh-white.svg" title="Nemocnice Jindřichův Hradec" alt="Nemocnice Jindřichův Hradec" style="height: 100px; width: 100%;">
         </a>
      </div>
      <div class="title">
         <h1>Informační portál Covid-19</h1>
      </div>
         
   </div>
   <nav id="nav_hlavni_menu" class="hlavni_menu"><div id="hlavni-menu-ikona-001" class="hlavni-menu-ikona-001" alt="Menu" title="Menu">MENU</div>
      <?php wp_nav_menu( array(
            'theme_location' => 'menu_covid19-portal',
            'menu_id'        => 'menu_covid19-portal',
         ) );
      ?>
   </nav>
</header>

	<section class="aktuality">
		<div class="aktuality_bocni_panel_obal">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
         <h2 id="title"><?php the_title(); ?></h2>
			<?php get_template_part('/template-parts/article', 'single'); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

</main>
<?php get_footer(); ?>
