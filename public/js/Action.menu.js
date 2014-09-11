$('Document').ready(function(e){	
 
		 $.CreateMenu = ({
		 
		    'result' : function(){ data =  $('.menu-item') ; return data; },
		
	 	   'isActive' : function(){ data =  $(this).is('tr') ; return data; } ,
	 	    
	 	   'addSl' : function(e){
	 	  
	 	  $(e.currentTarget).find('.sl').text(function(){
			 var sl = parseInt($(this).text());
			 		return sl+1;
			 		});
			 		
			 		return e;
			 		},
	 		
		 				 			
		   'toggletl' : function(bool){
		     
		      var fadetr ;
		   
		   if(bool){
		   
		   	 $(this).wrap("<tr class='uk-li-success'></tr>").fadeOut('fast'); 
		  
		    
		    }else{
		    
		   $(this).unwrap().fadeIn('fast');
		
		    	}
		    	
		 
			
			 
		     
		    }, 
		    
		    });
		    
	
	
	
		 
		$.CreateMenu.result().on('click',function(e){
			var bool = $.CreateMenu.isActive();
				
			var fadetr = $($.CreateMenu.toggletl(bool));
	
			console.log(fadetr);			
			
			
		
		 		/*
		 		$(e.currentTarget).triggerHandler('click',e);
			  
			  $('.uk-li-success').delegate('.clearitem','click',function(e){
				
				 			});
			
			
			});

		
		
		$('#modalbtn').on('click',function(e){
			
			var modal = $.UIkit.modal("#menu-print-modal");
			modal.options.bgclose = false ;
			modal.show();
			
					
		});
		
		
		});

			*/
			
			
	

			 		
		     		
				/*>var table = $('table.uk-table');
				
					   
					  if($(e.target).is('button.uk-icon-check-square-o')){
							
							$('li.uk-li-success').removeClass('uk-animation-reverse').clone(true).appendTo(table);
							
						
						}
						
												
					
					if($(e.target).is('span')){
				  			
				        $(e.target).closest('li.uk-li-success').removeClass('uk-li-success').remove();
				        //triggerHandler('click').addClass('uk-animation-reverse');
					  			
				  		
				  		}

					  
					  
					    modal.show();
					
					});
					
*/				
			
				
				
				
			});



});								
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
