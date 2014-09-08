
$('Document').ready(function(){	
	 
	var mdata ;
	
	$("li.menu-item").on('click',mdata,function(e){

	 		if($(e.currentTarget).hasClass('uk-li-success')){
		 	
		 		$(e.currentTarget).find('val.sl').text(function(n,h){
			 		  return ++h;			 		
		 		});
	 		
	 		}else{
	 		
	 		
		 		$(this).data($(e.currentTarget).clone(true)) ;
			
		 		$(e.currentTarget).children(':hidden').show('fast').end().addClass('uk-li-success');
		
			 	
				}	
				
			
							
				if($(e.target).hasClass('clearItem')){
				 				
				$(e.currentTarget).replaceWith($(this).data());		       
				}
		
		
						
		
		});
		
		
		$('button.uk-icon-check-square-o').click(function(e){
					
					
					console.log();
					
					
				});

				
				
			
	 
			

	

		


		
			
			
		
				
		
});



















	
	
	
	
	
	
	
	
	
	
