
$('Document').ready(function(e){	



	$.Mfn = ({
	 	 
	 	'items' :  $('li.item') ,
		 	    
	 	'mdbtn' : $('#modalbtn'),	
	 	
	 	'mdtable' : $('.kay-li'),
	 	  
		'addSl' : function(e){
	 	  
	 	  $(e.delegateTarget).find('.sl').text(function(){
			
			var  sl = parseInt($(this).text());
			 		return ++sl  ;
			 		});
			 		
			 	return $(e.delegateTarget);	
			 		},
	 					 			
		 'wraptoggle' : function(e,bool){
		 		 
					 if(bool){

		 				a = $(e.currentTarget).clone(true).appendTo('tbody').wrap("<tr class='kay-li' />");
		 				$(a).find(':hidden').show('fast');
		 			
		 			 	$(e.currentTarget).fadeOut('fast');
			 				
			 				
		 			}else{
		 			
		 				$(e.target).is('span.uk-close')
			 				
			 			return this.addSl(e);
		 				//$(e.delegateTarget).unwrap().slideToggle('fast');
		 				 		
			 			}
			 		},
			 			
						
							 
		 'closef' : function(e){
			 			
				if($(e.target).is("a.uk-close")){
				 
				 $(e.currentTarget).fadeOut('fast');
				 
				}
				},
		 	
		
		
		
		 });
		 
	  

	

		
	 $($.Mfn.items).on('click',function(e){
	 
//console.log($(e.currentTarget).parent().is('ul.uk-list'));
		 
		var ttr = $.Mfn.wraptoggle(e,$(e.currentTarget).parent().is('ul.uk-list'));
		 
		 	

		  		 	  
	  });
	  
	  
	 
    
   	   $('.uk-animation-slide-top').on('click',function(e){
	       	
	       //console.log($(e.data));
	        $.ttr = { tr : $('tbody tr.kay-li') };
			modal = $.UIkit.modal('#menu-print-modal');
	  		modal.options.bgclose = false;
	  			  		
	  		if($.ttr.tr.length===0){
		  			
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
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
