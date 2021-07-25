$(function() {
	/*menu sidebar*/
	$(".btn-menu").on('click', function() {
		$(".menu-wrap").toggleClass("menu-wrap-js");
		$(".navname").toggleClass("navname-js");
		$(".menu-name").toggleClass("menu-name-js");
		$(".menu-name-cerrado").toggleClass("menu-name-cerrado-js");
		$(".content").toggleClass("content-js");
		
    }); // end onclick



}); // end jquery
