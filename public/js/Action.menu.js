
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
	 					 			
		'wrap' : function(e,bool){
		 		 
					 if(bool){

		 			return	$(e.currentTarget).appendTo('fieldset.kay-menu').addClass("kay-item");
		 				
		 			
		 			}else{
		 			
			 			return $(e.currentTarget);
			 		},
			 			
						
							 
		 'closef' : function(e){
			 			
				if($(e.target).is("a.uk-close")){
				 
				 $(e.currentTarget).fadeOut('fast');
				 
				 }
				},
		 	
		
		
		
		 });
		 
	  


		 $.mufn = ({


			 'voli' : function(e,bool){

					 	if(bool){
						 		
						 			//  true 则执行添加数量的方法
						 			$.Mfn.addSl(e);
						 			return e;

					 		}else{

						 	  $(this).data(this);
						 	return clonenode	=	$.Mfn.wraptoggle(e,true);
						 	
						 		
						 		//  没有被选中,执行一个添加类的方法并存储该数据,返回方法返回会后的处理数据
					 		}
					 		
					 		
			 },




   });
		
//  
	 
$($.Mfn.items).on('click',function(e){

		 $.mufn.voli(e,$(this).hasClass('kay-item'));
					

});
			


   	   $('#mdbtn').on('click',function(e){
	       	
	      
	        $.Pmenu = { items : $('form.uk-form fieldset') };
					modal = $.UIkit.modal('#menu-print-modal');
					modal.options.bgclose = false;
	  			  		
	  		if($.Pmenu.items.length===0){
		  			
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
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
