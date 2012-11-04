

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
        
        
        
        $('.t-one:nth-child(2)').mouseover(function(){
            $('.orange-select').css('left','305px'); 
            $('.orange-select').fadeIn(300); 
            $('.table-link-1').removeClass('hidden'); 

        });
        
        $('.t-one:nth-child(3)').mouseover(function(){
            $('.orange-select').css('left','455px');       
            $('.orange-select').fadeIn(300); 
            $('.table-link-2').removeClass('hidden'); 
    
        });
        
        $('.t-one:nth-child(4)').mouseover(function(){
                $('.orange-select').css('left','608px');       
                $('.orange-select').fadeIn(300); 
                $('.table-link-3').removeClass('hidden'); 
        
            });
            
        $('.t-one:nth-child(5)').mouseover(function(){
                $('.orange-select').css('left','758px');       
                $('.orange-select').fadeIn(300); 
                $('.table-link-4').removeClass('hidden'); 
        
            });
         
         $('.t-one:nth-child(6)').mouseover(function(){
                 $('.orange-select').css('left','908px');       
                 $('.orange-select').fadeIn(300); 
                 $('.table-link-5').removeClass('hidden'); 
         
             });
        
        
        $('.orange-select').mouseout(function(){
        
            $('.orange-select').css('display','none'); 
            $('.orange-top').addClass('hidden'); 
        });
        
        
        
        
        
        $('.t-two:nth-child(2)').mouseover(function(){
                    $('.orange-select-two').css('left','355px'); 
                    $('.orange-select-two').fadeIn(300); 
                    $('.table-link-1').removeClass('hidden'); 
        
                });
                
                $('.t-two:nth-child(3)').mouseover(function(){
                    $('.orange-select-two').css('left','535px');       
                    $('.orange-select-two').fadeIn(300); 
                    $('.table-link-2').removeClass('hidden'); 
            
                });
                
                $('.t-two:nth-child(4)').mouseover(function(){
                        $('.orange-select-two').css('left','718px');       
                        $('.orange-select-two').fadeIn(300); 
                        $('.table-link-3').removeClass('hidden'); 
                
                    });
                    
                $('.t-two:nth-child(5)').mouseover(function(){
                        $('.orange-select-two').css('left','900px');       
                        $('.orange-select-two').fadeIn(300); 
                        $('.table-link-4').removeClass('hidden'); 
                
                    });
                 
                
                
                $('.orange-select-two').mouseout(function(){
                
                    $('.orange-select-two').css('display','none'); 
                    $('.orange-top').addClass('hidden'); 
                });
                
                
                ///menu
 
                
                $('ul.services-list li a').attr('target', '_blank');

        
        
        
        

        
        

        
         
      
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


      





      


