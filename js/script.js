$(function () {

	var marquee = $('.marquee');

	marquee.find('.marquee--item').css('display','inline-block');

	marquee.marquee({
		duration: 15000,
		gap: 500,
		duplicated: true,
		pauseOnHover: true
	});





// 	marquee.hover(function() {
// 		marquee.marquee('pause');
// 	}, function() {
// 		marquee.marquee('play');
// 	});




});



// $(document).ready(function(){
//
// 	var newsTabHeight = $('#newsTab').height();
// 	alert(newsTabHeight);
//
// 	$('#cartoonTab').css('height',newsTabHeight);
// 	$('#videoTab').css('height',newsTabHeight);
//
// });



$(document).ready(function(){
	$('.i---news-slider').owlCarousel({
		loop:true,
		margin:0,
		autoplay:true,
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
	})
});






$(document).ready(function() {

	$("#news-carousel").owlCarousel({
		loop:true,
		margin:0,
		autoplay:false,
		lazyLoad:true,
		responsiveClass:true,
		autoHeight: true,
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



// 	$('[data-fancybox="gallery1"]').fancybox({
// 		// Options will go here
// 	});
//
// 	$('[data-fancybox="gallery2"]').fancybox({
// 		// Options will go here
// 	});

// 	$('.img2Div-wrapper').children('a').fancybox({
// 		// Options will go here
// 	});



	$('.img2Div-wrapper').each(function( index ) {
		//console.log( index + ": " + $( this ).text() );

		$(this).children('a').fancybox({

			infobar: true,
			buttons: [
				"zoom",
				//"share",
				"slideShow",
				//"fullScreen",
				//"download",
				"thumbs",
				"close"
			],
			loop: true,
			protect: true,

			thumbs: {
				autoStart: true, // Display thumbnails on opening

				hideOnClose: true, // Hide thumbnail grid when closing animation starts
				parentEl: ".fancybox-container", // Container is injected into this element
				axis: "x" // Vertical (y) or horizontal (x) scrolling
			},
 			// Options will go here
		});

		console.log( index );
	});

	$('.img3Div-wrapper').each(function( index ) {
		//console.log( index + ": " + $( this ).text() );

		$(this).children('a').fancybox({
			// Options will go here
		});

		console.log( index );
	});

	$('.img4Div-wrapper').each(function( index ) {
		//console.log( index + ": " + $( this ).text() );

		$(this).children('a').fancybox({
			// Options will go here
		});

		console.log( index );
	});







});




var datePickerModule = (function(window,$){

	var datePicker = {
		dates:{
			today    : new Date(),
			tomorrow : new Date(new Date().setDate(new Date().getDate()+1)),
			_checkin : null,
			_checkout: null,
			checkinStartDate:null,
			checkoutStartDate:null,
		},
		_init:function(){
			this._cacheDom();
			this.dates.checkinStartDate = this.dates.today;
			this.dates.checkoutStartDate  = this.dates.tomorrow;

			this._startDatePickers();
			this._bindEvents();
		},
		_cacheDom:function(){
			this.$checkin = $("#news-from");
			this.$checkout = $("#news-to");
		},
		_bindEvents:function(){
			this.$checkin.on("changeDate", this._changeCheckinDatepicker.bind(this)).data("datepicker");
			this.$checkout.on("changeDate", this._changeCheckoutDatepicker.bind(this)).data("datepicker");
		},
		_startDatePickers:function(){

			//can select date from today
			this.$checkin.datepicker({
				format : "dd-mm-yyyy",
				startDate: this.dates.today,
			});
			//set cehckin selected date when page load
			this.$checkin.datepicker("setDate", this.dates.checkinStartDate);


			//can select date from tomorrow
			this.$checkout.datepicker({
				format : "dd-mm-yyyy",
				startDate: this.dates.tomorrow,
			});
			//set checkout selected date when page load
			this.$checkout.datepicker("setDate", this.dates.checkoutStartDate);
		},
		_isCheckinDateBeforeCheckoutDate : function(){
			var dateParts,dateObject;

			//get checkin datepickervalue
			this.dates._checkout = this.$checkout.datepicker("getFormattedDate");

			//get checkout datepickervalue
			this.dates._checkin = this.$checkin.datepicker("getFormattedDate");

			checkoutDateObj = this.dateObjectFromDatePickerValue(this.dates._checkout);
			checkinDateObj = this.dateObjectFromDatePickerValue(this.dates._checkin);

			//if selected checkin date is greter than or equal to value in checkout datepicker
			if(checkinDateObj.getTime() >= checkoutDateObj.getTime()){
				return false;
			}else{
				return true;
			}
		},
		_changeCheckinDatepicker : function(){

			if(this._isCheckinDateBeforeCheckoutDate() == false){
				this.dates._checkout = this.getTommorow(checkinDateObj);

				this.$checkin.datepicker('hide');
				this.$checkout.datepicker('show');

				//update checkout datepicker
				this.$checkout.datepicker("update",this.dates._checkout);
			}else{
				this.$checkin.datepicker('hide');
			}
		},
		_changeCheckoutDatepicker : function(){

			if(this._isCheckinDateBeforeCheckoutDate() == false){
				this.dates._checkin = this.getYesterday(checkoutDateObj);

				this.$checkin.datepicker('show');
				this.$checkout.datepicker('hide');

				//update checkout datepicker
				this.$checkin.datepicker("update",this.dates._checkin);
			}else{
				this.$checkout.datepicker('hide');
			}
		},
		getTommorow:function(date){

			var outputDate;
			var outputMonth;
			var outputYear;
			var tomorrow;
			var selectedDate = date.getDate();
			var monthlastDay  = (new Date(date.getFullYear(), date.getMonth() + 1, 0)).getDate();
			var month  = date.getMonth();
			var year   = date.getFullYear();

			//date is last day of month
			if(selectedDate == monthlastDay){

				//if month is last month of year
				if(month==11){
					outputMonth = 0;
					outputYear = year+1;
				}else{

					//increment month
					outputMonth = month+1;
					outputYear = year;
				}

				outputDate = 1;

			}else{
				outputDate = selectedDate+1;
				outputMonth = month;
				outputYear = year;
			}

			tomorrow = new Date(outputYear,outputMonth,outputDate);
			return(tomorrow);
		},
		getYesterday:function(date){

			var outputDate;
			var outputMonth;
			var outputYear;
			var yesterday;
			var selectedDate = date.getDate();
			var monthFirstday  = (new Date(date.getFullYear(), date.getMonth(), 1, 0)).getDate();
			var month  = date.getMonth();
			var year   = date.getFullYear();

			//date is first day of month
			if(selectedDate == 1){

				//if month is first month of year
				if(month==0){
					outputMonth = 11;
					outputYear = year-1;
				}else{

					outputMonth = month-1;
					outputYear = year;
				}

				//get previous month last date
				date.setDate(1); // going to 1st of the month
				date.setHours(-1); // going to last hour before this date even started.
				outputDate = date.getDate();

			}else{
				outputDate = selectedDate-1;
				outputMonth = month;
				outputYear = year;
			}

			yesterday = new Date(outputYear,outputMonth,outputDate);
			return(yesterday);
		},
		dateObjectFromDatePickerValue : function(dateString){
			var dateParts,dateObject;

			dateParts  = dateString.split("-");
			dateObject = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]); // month is 0-based

			return dateObject;
		},
	}

	datePicker._init();

	//public methods
	return {
		getYesterday : datePicker.getYesterday,
		getTommorow : datePicker.getTommorow,
		getdateObjectFromDatePickerValue:datePicker.dateObjectFromDatePickerValue,
	}

})(window,jQuery);