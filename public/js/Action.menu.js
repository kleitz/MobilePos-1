
$('Document').ready(function(){	
	 
	var mdata ;
	
	$("li.menu-item").on('click',mdata,function(e){

	 		if($(e.currentTarget).hasClass('uk-li-success')){
		 	
		 		$(e.currentTarget).find('val.sl').text(parseInt($(e.currentTarget).find('val.sl').text())+1); 		 	
	 		
	 		}else{
	 		
	 		
		 		$(this).data($(e.currentTarget).clone(true)) ;
			
		 			$(e.currentTarget).children(':hidden').show('fast');
		
			 	
				}	
				
			
							
				if($(e.target).hasClass('clearItem')){
				 	
				$($(this).data()).show().replaceAll(e.currentTarget);
				
				
		       }
		
		});
				
				
			
	 



	

		


		
			
			
		
				
		
});



















	
	
	
	
	
	
	
	
	
	
