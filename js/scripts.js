(function($){
    console.log("function");

    // all jquery code goes in here
    $(document).ready(function(){
 		
 		// bxslider single portfolio slider
 		 $('.bxslider-portfolio').bxSlider({

                    slideWidth: 300,
                    minSlides: 4,
                    maxSlides: 4,
                    slideMargin: 0,
                    nextSelector: '#slider-next',
                    prevSelector: '#slider-prev',
                    nextText: '<i class="fa fa-arrow-right" aria-hidden="true"></i>',
                    prevText: '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
					infiniteLoop: false

                });
 		// ends resize

 		// bxslider
 		$('.bxslider').bxSlider({
 			nextSelector: '#slider-next',
 			prevSelector: '#slider-prev',
 			nextText: '<i class="fa fa-arrow-right" aria-hidden="true"></i>',
 			prevText: '<i class="fa fa-arrow-left" aria-hidden="true"></i>'
 		}); // end bxslider

 		// homepage slider
 		$('.bxslider-home').bxSlider({
 			auto: true,
 			nextSelector: '#slider-next',
 			prevSelector: '#slider-prev',
 			nextText: '<i class="fa fa-arrow-right" aria-hidden="true"></i>',
 			prevText: '<i class="fa fa-arrow-left" aria-hidden="true"></i>'
 		}); // end bxslider

 		// magnific popout js
 		$('.parent-container').magnificPopup({
 		  delegate: 'a', // child items selector, by clicking on it popup will open
 		  type: 'image',
 		  gallery:{enabled:true},
 		  
 		  preload: [0,2], // read about this option in next Lazy-loading section

 		  navigateByImgClick: true,

 		  titleSrc: 'title',
 		  enabled:true
 		}); // end popup js


 		// mobile navigation menu
 		$('.mobileNavIcon').on('click', function(){
 		  $('.mobile').slideToggle(500);
 		}); // end mobile nav

    });
})(jQuery);
