

jQuery(document).ready(function($) {


//$(function() {
//$('body').css('display','none');
// $('body').fadeIn(400);
//});


//        fancybox

    

    $('.fancybox').fancybox({
    padding : 0
    });

//slider

      $('#gallery-1').royalSlider({
          slidesSpacing: 0,
          loop: true,
          keyboardNavEnabled: true,
          controlsInside: false,
          imageScaleMode: 'fill',
          arrowsNavAutoHide: false,
          autoScaleSlider: true, 
          arrowsNav: false,    
          controlNavigation: 'thumbnails',
          thumbsFitInViewport: true,
          navigateByClick: false,
          startSlideId: 0,
          autoPlay: false,
          transitionType:'move',
          globalCaption: true, 
          thumbs: {
              		// thumbnails options go gere
              		spacing: 0,
              		autoCenter:true,
              		arrows: false
              	}, 
          block: {
          	// animated blocks options go gere
          	moveEffect: 'right'
          }
        });
        
        
        
        var sliderInstance = $(".royalSlider").data('royalSlider');
        
        $('.next-slide').click(function(){
        
            sliderInstance.next();
        	console.log('Testing console');
        	$.fancybox.next();
        
        });
        
         
      
//      tabs

          
          
          $("#usual2").idTabs(function(id,list,set){ 
            $("a",set).removeClass("selected") 
            .filter("[href='"+id+"']",set).addClass("selected"); 
            for(i in list) 
              $(list[i]).hide(); 
            $(id).fadeIn(); 
            return false; 
          });  
          
      
});


      





      


