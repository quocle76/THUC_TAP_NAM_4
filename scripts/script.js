var $header = $('#mod-header');
var $headerDetail  = $('#mod-header-detail');
var modsliderProduct = $('#slider-product-mpv-popup');
var sliderproductdetail = $('#slider-product-detail');
	function showDropInfo() {
		$header.find('.arrow-user').on('click', function(event) {
		  if($header.find('.arrow-user').hasClass('active')){
		    $header.find('.arrow-user').removeClass("active");
		    $header.find('.sub-infor').hide();
		  }else {
		    $header.find('.arrow-user').addClass("active");
		    $header.find('.sub-infor').show();
		  }
		});
	}
	function showDropInfoo() {
		$headerDetail.find('.arrow-user').on('click', function(event) {
		  if($headerDetail.find('.arrow-user').hasClass('active')){
		    $headerDetail.find('.arrow-user').removeClass("active");
		    $headerDetail.find('.sub-infor').hide();
		  }else {
		    $headerDetail.find('.arrow-user').addClass("active");
		    $headerDetail.find('.sub-infor').show();
		  }
		});
	}
	function sliderProductt() {
            modsliderProduct.find(".slider-large").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
                fade: true,
                asNavFor: '.nav-slider-small',
                responsive: [{
                    breakpoint: 767,
                    settings: {
                        dots: true
                    }
                }]
            });
            modsliderProduct.find(".nav-slider-small").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                focusOnSelect: true,
                asNavFor: '.slider-large',
                autoplay: true,
                autoplaySpeed: 5000
            });
    }
    function sliderDetail() {
            sliderproductdetail.find(".slider-large").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                fade: true,
                autoplay: true
            });
    }
    function scrool() {
    	$(window).bind("scroll", function() {
		    if ($(this).scrollTop() > 200) {
		        $(".scroll-top").fadeIn();
		    } else {
		        $(".scroll-top").fadeOut();
		    }
		});
    }
    function scroll_topp(){
	  	$('.scroll-top').click(function(){
	        $('html, body').animate({ scrollTop:0 }, 'swing');
	            return false;
	    });
	}
	function CloseLogin(){
		$('.close-login').click(function(){
			$('.wrap').hide();
			$('.registerL').hide();
		});

	}
	function ShowDN() {
		$('.loginDN').click(function(){
			$('.wrap').show();
		});
	}
	function ShowRE() {
		$('.register').click(function(){
			$('.registerL').show();
		});
	}
$(document).ready(function(){
	showDropInfo();
	showDropInfoo();
	sliderProductt();
	sliderDetail();
	scrool();
	scroll_topp();
	CloseLogin();
	ShowDN();
	ShowRE();
});
