
$('Document').ready(function(e){	



	$.Mfn = ({

	 	 
	 	'items' :  $('label.item') ,  //菜单列表
		 	    
	 	'mdbtn' : $('#modalbtn'),	
	 	
	 	'mditem' : $('fieldset.kay-menu label.item'),
	 	  
		'addSl' : function(e){
	 	  
	 	  $(e.delegateTarget).find('.sl').text(function(){
			
			var  sl = parseInt($(this).text());
			 		return ++sl  ;
			 		});
			 		
			 	return $(e.delegateTarget);	
			 		},
	 					 			
													 
		'closef' : function(e){
			 			
				if($(e.target).is("a.uk-close")){
				 
				 $(e.currentTarget).fadeOut('fast');
				 
				 }
				},
	
		 });
		 

					 		
 
$('label.item').on({

'click':function(e){

				e.stopPropagation();
				
					},

			this.voli(e);

'voli' : function(e){

				if($(e.currentTarget).hasClass('kay-select')){

							return true;
					}else{
							return false;
						}
						},

'add' : function(){

						e.currentTarget
				}



});
			


   	   $('#mdbtn').on('click',function(e){
	       	
	      
	        var Pmenu =  $('#print-form') ;
					modal = $.UIkit.modal('#menu-print-modal');
					modal.options.bgclose = false;
	  			  		
	  		if($(Pmenu).length===0){
		  			
				  		$.UIkit.notify({
					    message : "<p class='uk-icon-smile-o uk-text-center uk-width-1'> &nbsp;&nbsp;客官,先点几个喜欢吃的菜吧 !  </p>",
					    status  : 'info',
					    timeout : 2000,
					    pos     : 'top-center' });
		  		
		  		
	  		}else{
		  		
		  		
		  	modal.show();
				  		
			  		}
			  		
			  

	  		
		  
		  
	  });		 
	  
	 
	 
	 
	 //on('click',function(e){
	  
	    
	    
				  
		  
	  //});
	 
		





















});								
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
