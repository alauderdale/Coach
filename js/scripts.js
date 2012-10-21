

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

        });
        
        $('.t-one:nth-child(3)').mouseover(function(){
            $('.orange-select').css('left','455px');       
            $('.orange-select').fadeIn(300); 
    
        });
        
        $('.t-one:nth-child(4)').mouseover(function(){
                $('.orange-select').css('left','608px');       
                $('.orange-select').fadeIn(300); 
        
            });
            
        $('.t-one:nth-child(5)').mouseover(function(){
                $('.orange-select').css('left','758px');       
                $('.orange-select').fadeIn(300); 
        
            });
         
         $('.t-one:nth-child(6)').mouseover(function(){
                 $('.orange-select').css('left','908px');       
                 $('.orange-select').fadeIn(300); 
         
             });
        
        
        $('.orange-select').mouseout(function(){
        
            $('.orange-select').css('display','none'); 
        });
        
        
        
        
        
        $('.t-two:nth-child(2)').mouseover(function(){
                    $('.orange-select-two').css('left','335px'); 
                    $('.orange-select-two').fadeIn(300); 
        
                });
                
                $('.t-two:nth-child(3)').mouseover(function(){
                    $('.orange-select-two').css('left','515px');       
                    $('.orange-select-two').fadeIn(300); 
            
                });
                
                $('.t-two:nth-child(4)').mouseover(function(){
                        $('.orange-select-two').css('left','698px');       
                        $('.orange-select-two').fadeIn(300); 
                
                    });
                    
                $('.t-two:nth-child(5)').mouseover(function(){
                        $('.orange-select-two').css('left','880px');       
                        $('.orange-select-two').fadeIn(300); 
                
                    });
                 
                
                
                $('.orange-select-two').mouseout(function(){
                
                    $('.orange-select-two').css('display','none'); 
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


      





      


