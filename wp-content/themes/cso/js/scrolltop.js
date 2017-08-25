
$(document).ready(function() {




	//scrolltop 
	
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

	//initialisation menu super fish
	
       	$( document ).ready( function ( ) { 
		//$( 'ul.menu' ).superfish ( ) ; 
		} ) ;
				// page Premiere et Terminale 						$('#eco').click(function(){						$('#litt_box').hide('slow');			$('#s_box').hide('slow'); 			$('#es_box').show('slow');					});				$('#litt').click(function(){						$('#s_box').hide('slow'); 			$('#es_box').hide('slow');			$('#litt_box').show('slow');		});				$('#scien').click(function(){						$('#litt_box').hide('slow');			$('#es_box').hide('slow');			$('#s_box').show('slow'); 		});
		
     // sticky menu au scroll
	 
	 $(window).scroll(function() {
	 
		/* 
		if( $(window).scrollTop() > 160){
			 
				$('.menu-menu-principal-container').css('position','absolute');
				$('.menu-menu-principal-container').css('z-index','100');
				$('.menu-menu-principal-container').css('top','0px');
				/*$('.menu-menu-principal-container').animate({
				
				
				top: "0px"

				}, 2000, function (){
					

				});

			//$('.menu-menu-principal-container').css('top','0px');
		
		  
		}else
		{
			$('.menu-menu-principal-container').css('position','relative');
			
		}*/
			
	});
		
		

	});