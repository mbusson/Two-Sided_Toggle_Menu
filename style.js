$(document).ready(function(){

// --- PRE-LOADER ---
 
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 1);

// --- MENU TOGGLE SELECTOR ---

/* count 2 = none, 1 = rent, 0 = rent-out */

	$('#rent').click(function() {
		$('#rent-menu').css('width', '20%');
		$('#rent-out-menu').css('width', '1%');
	});
	$('#rent-out').click(function() {
		$('#rent-out-menu').css('width', '20%');
		$('#rent-menu').css('width', '1%');
	});
	$('#rent-menu .exit').click(function() {
		$('#rent-out-menu').css('width', '1%');
		$('#rent-menu').css('width', '1%');
	});
	$('#rent-out-menu .exit').click(function() {
		$('#rent-out-menu').css('width', '1%');
		$('#rent-menu').css('width', '1%');
	});
});