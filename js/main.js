;(function($){


	$(document).ready(function(){
		var $body = $('body'),
			$btn = $body.find('.ba-toggle'),
			$overlay = $body.find('.ba-overlay');

		$btn.on('click', function(){
			$body.toggleClass('ba-menu-open')
		});
		$overlay.on('click', function(){
			$body.toggleClass('ba-menu-open')
		});
	});


	$(window).load(function() {
		var $prev = $('.ba-portfolio-slider-text .slick-prev'),
			$next = $('.ba-portfolio-slider-text .slick-next');
		if($.fn.slick){
			$('.ba-promo-slider').slick({
				dots: false,
				arrows: false,
				infinite: true,
				slide: '.ba-promo-slider__slide',
				autoplay: true,
	  			autoplaySpeed: 3000,
			});
			$('.ba-portfolio-slider-photo').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				asNavFor: '.ba-portfolio-slider-text',
				focusOnSelect: true,
				centerMode: true,
				variableWidth: true,
				dots: false,
				arrows: false,
				infinite: true,
				slide: '.ba-portfolio-slider-photo__slide'
			});
			$('.ba-portfolio-slider-text').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				asNavFor: '.ba-portfolio-slider-photo',
				fade: true,
				dots: false,
				arrows: true,
				infinite: true,
				slide: '.ba-portfolio-slider-text__slide',
				prevArrow: $prev,
				nextArrow: $next
			});
		};


		if($.fn.swipebox){
			$('.swipebox').swipebox({

			});
		};

		//services section
		$(".ba-services__link").eq( 0 ).attr("data-name", "web");
		$(".ba-services__link").eq( 1 ).attr("data-name", "photo");
		$(".ba-services__link").eq( 2 ).attr("data-name", "seo");
		$(".ba-services__link").eq( 3 ).attr("data-name", "app");

		$(".ba-services-description__item").eq( 0 ).attr("data-name", "web");
		$(".ba-services-description__item").eq( 1 ).attr("data-name", "photo");
		$(".ba-services-description__item").eq( 2 ).attr("data-name", "seo");
		$(".ba-services-description__item").eq( 3 ).attr("data-name", "app");

		// Adding class "ba-services-description__item--active" to first div
		$( ".ba-services-description__item" ).eq( 0 ).addClass('ba-services-description__item--active');


		$('.ba-services__line').on( 'mouseenter', '.ba-services__link', function(e) {
			var filterValue = $(this).attr('data-name');
			var filterText = $('.ba-services-description').find('[data-name = ' + filterValue + ']');

			filterText
				.siblings()
					.removeClass('ba-services-description__item--active')
					.end()
				.addClass('ba-services-description__item--active');


			e.preventDefault();
		});

		// Adding class "is-checked" to first filter "All"
		$( "button" ).eq( 1 ).addClass('is-checked');

		// init Isotope
		// Cheking using function "isotope"
		if($.fn.isotope){
			var $grid = $('.iso-grid').isotope({
				itemSelector: '.ba-works__work',
				layoutMode: 'fitRows'
			});
		}
		// bind filter button click
		$('.filters-button-group').on( 'click', 'button', function() {
			var filterValue = $( this ).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});
		// change is-checked class on buttons
		$('.ba-filters').each( function( i, buttonGroup ) {
			var $buttonGroup = $( buttonGroup );
			$buttonGroup.on( 'click', 'button', function() {
				$buttonGroup.find('.is-checked').removeClass('is-checked');
				$( this ).addClass('is-checked');
		  });
		});

		// Google Map
		// Cheking defining "google-object"
		// if(typeof google !== 'undefined'){
		// 	var $mapDiv = $('.ba-map')[0];
		//     var $coordinates = {lat: 52.130717, lng: -106.6443334};
		//     var $map = new google.maps.Map($mapDiv, {
		// 	    center: $coordinates,
		// 	    scrollwheel: false,
		// 	    zoom: 15
	 //    	});
	 //    	var $marker = new google.maps.Marker({
		//     	position: {lat: 52.129033, lng: -106.663203},
		//     	map: $map,
		//     	icon: "img/marker.svg"
		// 	});
  //   	};
	});
})(jQuery);
