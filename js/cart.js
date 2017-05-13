$(document).ready(function() {

	$('.cart__slider_img img').on('click',function(evt) { 
		evt.preventDefault();       		
		var imgPath = $(this).attr('data-bigimg');         
		var oldImage = $('.cart__left_block__img img');              
		var newImage = $('<img src="' + imgPath +'">' ); 
		$('.cart__left_block__img a').attr('href', imgPath);		
		$(this).parents('.cart__left_block').find('.cart__left_block__img a').html(newImage); 
	});

	$('.cart__char__right__colors a').hover(function() {
		var thiscolor = $(this).attr('data-color');
		$('.cart__colortxt span').show().text(thiscolor);		
	}, function() {
		$('.cart__colortxt span').hide();	
	});
	
	var owlcart = $(".js-owl-slidercart");
	owlcart.owlCarousel({
		loop:true,
		nav:true, 
		autoplay:false,
		smartSpeed:1000,
		margin:10,
		mouseDrag:false,
		touchDrag: false,
		center:false, 			
		navText:['<span class="cart-left"></span>','<span class="cart-right"></span>'],
		responsive:{
			0:{
				items:0
			},
			320:{
				items:0  
			},        
			750:{
				items:4
			},
			1200:{
				items:4
			}
		}
	});

	var owlcartmob = $(".owl-slider-mob");
	owlcartmob.owlCarousel({
		loop:true,
		nav:true, 
		autoplay:false,
		smartSpeed:1000,
		margin:0,
		mouseDrag:false,
		touchDrag: false,
		center:false, 			
		navText:['<span class="cart-left"></span>','<span class="cart-right"></span>'],
		responsive:{
			0:{
				items:1
			},
			320:{
				items:1  
			},
			990:{
				items:1  
			},
			1024:{
				items:1  
			}				
		}
	});


	$(".cart__char__right__number .cart-button").on("click", function() {
	  	var thisbutton = $(this);
	  	var oldValue = thisbutton.parent().find("input").val();
	  	oldValue =  parseFloat(oldValue);
	  	if (thisbutton.text() == "+") {
	  		var newVal = oldValue + 1;   		
	  	}  
	  	else {   
	  		if (oldValue > 1) {
	  			var newVal = oldValue - 1;       
	  		} else {
	  			newVal = 1;      
	  		}
	  	}
	 	thisbutton.parents('.cart__char__right__number').find("input").val(newVal);
	});



	$(".radio__hidden").on("change", function() {
		$('.cart__radio_checked').removeClass('cart__radio_checked');
		$(this).parent('.cart__radio').addClass('cart__radio_checked');
	});


	$('.cart__sliderbox a[data-fancybox-group]').on('click', function () {
		return false;
	})



});