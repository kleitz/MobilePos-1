$('Document').ready(function(e){	
 	
	 
	
	$("li.menu-item").on('click',function(e){
			 		
	 		if($(e.currentTarget).parent().is('tr')){
		 	
		 		$(e.delegateTarget).children(':hidden').show().end().find('val.sl').text(function(){
			 		
			 		var sl = parseInt($(this).text());
			 		return sl+1;
		 		});	
	 		
	 		
	 		}
		 			
		   $(this).data($(e.currentTarget).clone(true)).addClass('uk-li-success').children(':hidden').toggle();
		   $(this).show('table.uk-table').wrap('<tr/>');	  
			    
		     
		     
		    
	
		 });
		 
		 
		 
		 $('.table tr').on('click',function(e){
		 
		 		console.log(e.delegateTarget,e.currentTarget);
			 
			 
			  $('.uk-li-success').delegate('.clearitem','click',function(e){
				
				$(e.delegateTarget).removeClass('uk-li-success').fadeOut('fast');
										
			});

			});

		
		
		$('#modalbtn').on('click',function(e){
			
			var modal = $.UIkit.modal("#menu-print-modal");
			modal.options.bgclose = false ;
			modal.show();
			
					
		});

			
			
			
		});

			 		
		     		
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
			
				
				
				
				
								
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
