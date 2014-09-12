
$('Document').ready(function(e){	



	 $.Menu = ({
	 
	 		'table' : $('table.uk-table'),
	 
	 		'modal' :  $.UIkit.modal('#menu-print-modal'),
		 
		    'items' :  $('li.item') ,
		 	    
		 	'mdbtn' : $('#modalbtn'),
		 	
		 	'ban' : $('a.uk-icon-ban'),
	 	  
		 	'addSl' : function(e){
	 	  
	 	  $(e.delegateTarget).find('.sl').text(function(){
			 
			 var sl = parseInt($(this).text());
			 		return sl+1;
			 		});
			 		
			 		},
	 					 			
		 	'wraptoggle' : function(e,bool){
		 			if(bool){
		 			
			 		
		 				$(e.currentTarget).clone(true).appendTo('table.uk-table').wrap("<tr class='kay-li' />").find('tt.in1').show('200');
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
		 
	  
		
	 $($.Menu.items).on('click',function(e){
		  
		 
		  	var bool;
			  	
			  if( bool = $(e.currentTarget).parent().is('ul') ){
				
				  
				  	$.Menu.wraptoggle(e,bool);
				  
			  }			  
		  
		  
		  
	  });



		 
	 
	 
	 $($.Menu.mdbtn,$.Menu.ban).on('click',function(){
	
		 
		 if ( $(e.Target ).is('a') {
			 	$.Menu.modal.hide();
			 } else {
				$.Menu.modal.show();
			}
		 
	 }); 

  $($.Menu.modal).on('click',function(e){
			
		
			
			
			
			
			
		});	
				
				
	





















});								
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
