/*$(document).ready(function () {*/
/* Skrytí submenu */
/*$( "li.menu-item-has-children ul.sub-menu" ).addClass("neviditelny")*/
/* Odkrytí submenu po najetí na poožku v hlavním menu*/
/*$( "div.extra_menu_left_velke li.menu-item-has-children" ).hover(
  function() {
    $( this ).find( "ul.sub-menu" ).removeClass( "neviditelny" );
  }, function() {
    $( this ).find( "ul.sub-menu" ).addClass( "neviditelny" );
  }
);
});*/


$(document).ready(function () {
	$("#hlavni-menu-ikona-001").click(function () {
$("#hlavni_menu").toggle()
});
/* Odkrytí submenu po najetí na poožku v hlavním menu*/
	if ($(window).width() > 960) {
   	$( "li.rozbal_menu").hover(
	  function() {
		$( this ).find( "ul.sub-menu" ).show();
	  }, function() {
		$( this ).find( "ul.sub-menu" ).hide();
	  }
	);
	}
	else {
		$( "li.rozbal_menu").click(function() {
			$(this).find( "ul.sub-menu" ).toggle();
		});
		$( document ).ready(function() {
			$('#nav_hlavni_menu li:not(.menu-item-has-children) a').on('click', function(){
			document.getElementById("hlavni_menu").style.display = "none";
		});
	});
	}
	
});