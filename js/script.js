

$(document).ready(function() {

	$("#news-carousel").owlCarousel({
		loop:true,
		margin:0,
		autoplay:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				autoHeight:true
			},
			400:{
				items:1,
				nav:true,
				autoHeight:true
			},
			600:{
				items:1,
				nav:true,
				autoHeight:true
			},
			1000:{
				items:1,
				nav:true,
				loop:true,
				//autoplay:true,
				autoplayTimeout:2000,
				autoplayHoverPause:false,
				autoHeight:true
			}
		},
		navText : [ '<a id="" class="disableLink prev" href="#" style="display: block;"><i class="fa fa-angle-left"></i></a>',
			'<a id="" class="disableLink next" href="#" style="display: block;"><i class="fa fa-angle-right"></i></a>']

	});

	$("#cartoon-carousel").owlCarousel({
		loop:true,
		margin:0,
		autoplay:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				autoHeight:true
			},
			400:{
				items:1,
				nav:true,
				autoHeight:true
			},
			600:{
				items:1,
				nav:true,
				autoHeight:true
			},
			1000:{
				items:1,
				nav:true,
				loop:true,
				//autoplay:true,
				autoplayTimeout:2000,
				autoplayHoverPause:false,
				autoHeight:true
			}
		},
		navText : [ '<a id="" class="disableLink prev" href="#" style="display: block;"><i class="fa fa-angle-left"></i></a>',
			'<a id="" class="disableLink next" href="#" style="display: block;"><i class="fa fa-angle-right"></i></a>']

	});


	$("#video-carousel").owlCarousel({
		loop:true,
		margin:0,
		autoplay:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				autoHeight:true
			},
			400:{
				items:1,
				nav:true,
				autoHeight:true
			},
			600:{
				items:1,
				nav:true,
				autoHeight:true
			},
			1000:{
				items:1,
				nav:true,
				loop:true,
				//autoplay:true,
				autoplayTimeout:2000,
				autoplayHoverPause:false,
				autoHeight:true
			}
		},
		navText : [ '<a id="" class="disableLink prev" href="#" style="display: block;"><i class="fa fa-angle-left"></i></a>',
			'<a id="" class="disableLink next" href="#" style="display: block;"><i class="fa fa-angle-right"></i></a>']

	});

	//alert();





	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		//e.target // newly activated tab
		//e.relatedTarget // previous active tab
		//$(".owl-carousel").trigger('refresh.owl.carousel');
	});
});