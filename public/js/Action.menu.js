
$('Document').ready(function(e){	



	$.Mfn = ({
	 
	 	 "table" :  $('table.uk-table tbody'),
		 
	 	'items' :  $('li.item') ,
		 	    
	 	'mdbtn' : $('#modalbtn'),	
	 	  
		 'addSl' : function(e){
	 	  
	 	  $(e.delegateTarget).find('.sl').text(function(){
			
			  sl = parseInt($(this).text());
			 		return sl+1;
			 		});
			 		
			 		},
	 					 			
		 'wraptoggle' : function(e,bool){
		 			if(bool){
		 			
			 		
		 				$(e.currentTarget).clone(true).appendTo($.Mfn.table).wrap("<tr class='kay-li' />").find('tt.in1').show('200');
		 			 	$(e.currentTarget).fadeOut('fast');
			 				
			 				
		 				 }else{

		 				$(e.currentTarget).unwrap().show('fast');
		 				 
		   			 					
			 			}
		    
			 			
			 			},
			 			
			 			
		 'hide' : function(e){
				 
						$(e.deledateTarget).hide();	 
				 
						},
						
						
		 'reset' : function(dom,getorpush){
		 		
		 		
		 		if(getorpush==='get'){
		 		
		 		var res = new Array();
		 		
		 		$(dom).each(function(n){
			 		
			 			 		
			 	res[n] = $(this);
			 	
			 	});
			 		
		 		}else{
			 		
			 	var n = $(dom).index()
			 		
			 	 return dom = res[n] ;
			 		
		 		}
		 		
		 		
	 		},
		 	
		 });
		 
	  

		
	 $($.Mfn.items).on('click',function(e){
		  
		 			//console.log(e.currentTarget);
		 			
		 			  	var bool;
			  	
			  if( bool = $(e.currentTarget).parent().is('ul') ){
				
				  
				  	$.Mfn.wraptoggle(e,bool);
				  
			  }			  
		  
		  
		  
			  
		  
	  });


	  $($.Mfn.mdbtn).on('click',function(e){
	  
	  		var modal = $.UIkit.modal('#menu-print-modal');
	  		
		  
	  		modal.options.bgclose = false;
		  
		   console.log(modal.show());
		  
		  
	  });		 
	 
		





















});								
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
