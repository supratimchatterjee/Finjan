 jQuery(document).ready(function($) {
	$("#images-gallery").lightSlider({
		gallery:true,
		item:1,
		auto:false,
		loop:true,
		thumbItem:9,
		slideMargin:0,
		enableDrag: false,
		currentPagerPosition:'left',
		onSliderLoad: function(el) {
			el.lightGallery({
				selector: '#images-gallery .lslide'
			});
		}
	});
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlsContainer: $(".custom-controls-container"),
		customDirectionNav: $(".custom-navigation a")
	  });
	});


    // Target your .container, .wrapper, .post, etc.
    $(".slider-section").fitVids();

  });

//jQuery(document).ready(function($) {
//  $("#images-gallery").lightSlider({
//	  auto:true,
//	  item:6,
//      loop:true,
//	  keyPress:true
//  });
//})
