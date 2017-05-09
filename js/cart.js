$(document).ready(function() {

	$('.cart__slider_img img').on('click',function(evt) { 
		evt.preventDefault();       		
		var imgPath = $(this).attr('data-bigimg');         
		var oldImage = $('.cart__left_block__img img');              
		var newImage = $('<img src="' + imgPath +'">' ); 		
		$(this).parents('.cart__left_block').find('.cart__left_block__img').html(newImage); 
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
					items:1
				},
				320:{
					items:2   
				},        
				500:{
					items:3
				},
				1200:{
					items:4
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


	$(".dfopen1 a").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".dfimge1").offset().top - 170
	    }, 500);
	});



});