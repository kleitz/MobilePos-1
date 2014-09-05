$('Document').ready(function(){
	
			
			var menu_data = Object;
	   	
	$("li.menu-item").on('click',function(Event){
	
			event.stopPropagation();
			var wrapli = $(this);
			var wrapdiv = $(this).closest('div');
			if(wrapdiv.hasClass('uk-panel-box-success')){
				var sl = parseInt(wrapdiv.find('val.sl').text());
				  	
					 wrapdiv.find('val.sl').text(sl+1); 
				
			}else{
				
				wrapli.fadeIn("fast",function(){
					
					event.stopPropagation();
					$(this).wrap("<div class='uk-panel-box-success'></div>").append("<span class='uk-badge uk-width-1-3'>已选<val class='sl'>1</val>份</span>");
				wrapli.before("<a id='box-succ-close' class='uk-float-right uk-close uk-close-alt'></a>");	
					
					
				});
				
							
				
				
				
				
			
			}
		
			$('#box-succ-close').click(function(event){
				
				event.stopPropagation();
				$(this).next('li.menu-item').unwrap().find('span.uk-badge').detach();
				$(this).detach();
				
	
			});
				
					
					
	});
	
	
	
			
	  $("a[href='#print-modal-a']").on('click',function(e){
		  
		  	e.stopPropagation();
		  	
		  	var modal = $.UIkit.modal("#print-modal");
		  	var menuD = $('div.uk-panel-box-success').find('li');
		  	var table = $('table.uk-table');
		  
				
		  	if ( modal.isActive() ) {
		  		
		  		table.replaceAll('table.uk-table');
			  	modal.hide();
			  	
			  	
			  	  }else{
			  	  
				modal.show();
								
				menu_data.items =  new Object ;
				
				menuD.each(function(n){
				 	
				var valv = this.value; 
				var vals = $.trim($(this).find('val.sl').text());
				var valj = $.trim($(this).find('val.jg').text());
				menu_data.items[valv] = vals+'x'+valj;
	
			});	
								
			}	
				
			
			
		
		});
		
		
});



















	
	
	
	
	
	
	
	
	
	
