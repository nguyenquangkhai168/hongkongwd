(function ($) {
	$(document).ready(function () {
		$("#call-mobile-menu").click(function (e) {
			e.preventDefault();
			$("#content-mobile-menu").slideToggle();
			$(this).find(".far").toggleClass("fa-times");
		});

		$(".btn-font-download").click(function (e) {
			e.preventDefault();
			$(".popup-wrapper").fadeToggle();
			$(".search-popup").show();
		});

		$(".popup-wrapper").on("click", function (e) {
			if (e.target === e.currentTarget) {
				$(this).fadeToggle();
			}
		});

		/* owlcarousel */
		if ($(".owl-carousel").length) {
			$(".owl-carousel").each(function () {
				var owl = $(".owl-carousel");
				$(this).owlCarousel({
					margin: 0,
					autoplayTimeout: $(this).data("autotime"),
					smartSpeed: $(this).data("speed"),
					autoHeight: $(this).data("autoheight"),
					autoplay: $(this).data("autoplay"),
					items: $(this).data("carousel-items"),
					nav: $(this).data("nav"),
					dots: $(this).data("dots"),
					center: $(this).data("center"),
					loop: $(this).data("loop"),
					responsive: {
						0: {
							items: $(this).data("mobile"),
							margin: $(this).data("margintb"),
						},
						768: {
							items: $(this).data("tablet"),
							margin: $(this).data("margintb"),
						},
						992: {
							items: $(this).data("desktop-small"),
							margin: $(this).data("margintb"),
						},
						1680: {
							items: $(this).data("desktop"),
							margin: $(this).data("margintb"),
						},
					},
				});
			});
		}

		if ($("#macy-container").length) {
			var masonry = new Macy({
				container: "#macy-container",
				trueOrder: false,
				waitForImages: false,
				useOwnImageLoader: false,
				debug: true,
				mobileFirst: true,
				columns: 1,
				margin: {
					y: 16,
					x: "2%",
				},
				breakAt: {
					1200: 3,
					940: 4,
					520: 3,
					400: 2,
				},
			});
		}
	});
})(jQuery);
