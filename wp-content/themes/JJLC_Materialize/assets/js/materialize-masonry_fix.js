var msnry, openIMG;

imagesLoaded(grid, function() {
	// init Isotope after all images have loaded
	var $container = $('#grid').masonry({
		itemSelector: '.grid-item',
		columnWidth: '.grid-sizer',
		percentPosition: true
	});
	
	// allow image to open full size
	$container.on('click', '.grid-item', function() {
		// add open-img class and remove grid-item class
		$(this).addClass("open-img");
		$(this).removeClass("grid-item");
		openIMG = this;
	});
	
	// return image back to grid on container click
	$container.on('click', '.open-img', function() {
		// add grid-item class back in and remove open-img class
		$(this).removeClass("open-img");
		$(this).addClass("grid-item");
	});
	
	// return image back to grid on click
	$("img").click(function(){
		if ($(this).hasClass("materialboxed"))
		{
			$(this).click(function(){
				$(openIMG).removeClass("open-img");
				$(openIMG).addClass("grid-item");
			});
		}
	});
	
	// return image back to grid on scroll
	$(window).scroll(function() {
		if ($("img").hasClass("materialboxed"))
		{
			$(openIMG).removeClass("open-img");
			$(openIMG).addClass("grid-item");
		}
	});

	// return image back to grid on ESC
	$(document).keyup(function(e) {
		if (e.keyCode === 27) {
			if ($("img").hasClass("materialboxed")) {
				$(openIMG).removeClass("open-img");
				$(openIMG).addClass("grid-item");
			}
		}
	});
});