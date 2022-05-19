<?php if ( is_home() || in_category(75)) { ?>
			<div class="pozadi">
		<?php }
		else { ?>
			<div class="pozadi" <?php if ( has_post_thumbnail() && !is_archive() ) {?> style="background-image: url('																									<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?> ')" <?php 
				} else {} ?>>
		<?php } ?>
		<h1>
			<?php if ( is_home()) {
				bloginfo('name'); ?>
			<?php }
			else if (is_search()) {
				printf( __('Vyhledáno: %s'), get_search_query() );
			}
			else {
				wp_title('');
			}?>
		</h1>
		<nav class="vyhledavani">
			<form role="search" method="get" id="search" class="vyhledavani_formular" action="<?php echo get_home_url(); ?>">
				<input type="text" name="s" class="vyhledavani_pole" placeholder="Hledaný text...">
				<input type="submit" id="search-button" value="Hledat" class="tlacitko tlacitko_zluta vyhledavani_tlacitko">
			</form>
		</nav>
	</div>
	<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size

if ($(window).width() > 1080) {
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		document.getElementById("nav_hlavni_menu").style.margin = "0px 0px 0px 0px";
		document.getElementById("logo_menu_obal").style.height = "70px";
		document.getElementById("hlavicka_logo").style.marginTop = "20px";
		document.getElementById("logo_img").style.width = "80%";
		document.getElementById("logo_menu_obal2").style.boxShadow = "0px 2px 10px 0px rgba(0,0,0,0.1)";
	  } else {
		document.getElementById("nav_hlavni_menu").style.margin = "30px 0px 0px 50px";
		document.getElementById("logo_menu_obal").style.height = "100px"
		document.getElementById("hlavicka_logo").style.margin = "25px 0px 25px 0px";
		document.getElementById("logo_img").style.width = "100%";
		document.getElementById("logo_menu_obal2").style.boxShadow = "0px 0px 0px 0px";


	  }
	}
}
else {}
/*
if (!navigator.appName == 'Microsoft Internet Explorer' ||  !!(!navigator.userAgent.match(/Trident/) || !navigator.userAgent.match(/rv:11/)) || (!typeof $.browser !== "undefined" && $.browser.msie == 1))
{
$( document ).ready(function() {
  var $sticky = $('.bocni_panel_obal');
  var $stickyrStopper = $('#stop');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 70;
    var stickyStopperPosition = $stickyrStopper.offset().top;
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ position: 'absolute', top: diff });
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', top: stickOffset });
      } else {
          $sticky.css({position: 'relative', top: 'initial'});
      }
    });

  }
});
}*/
</script>