
$('Document').ready(function(){
			var TouchObj =  document.getElementsByTagName('val');
			console.log(TouchObj);
			
			var Marra = new Array;
			
			var menu_data ={ demo : '1' } ;
										
		
	   	
	 $("li.menu-item").on('click',menu_data,function(e){
	 

	 		if($(this).hasClass('uk-panel-box-success')){
		 	var sl = parseInt($(this).find('val.sl').text());  
		 	e.data.value.sl = sl+1;	
		 	$(this).find('val.sl').text(sl+1);	
		 			
		  		
	 		}else{
	 		
	 			e.data.Domli = $(e.currentTarget).clone(true);	
			   $(e.currentTarget).addClass('uk-panel-box-success').append("<span class='uk-badge uk-width-1-3'>已选<val class='sl'>1</val>份</span>").prepend("<a  class='uk-float-left uk-close uk-close-alt'></a>").find('img.uk-thumbnail').hide('fast');
			    e.data.value = {dish : e.currentTarget.value , sl : 1};
			  
						 			  
				
				}	
				
			
				//$('uk-close-alt').delegate(
				
				if($(e.target).hasClass('uk-close-alt')){
				 
				 	$(e.data.Domli).fadeIn('fast','linear').replaceAll($(e.currentTarget));
				
					}
					
		
					//}	
					
				 
				
				 Marra.push(e.data.value);
				//console.log(Marra);		
				
				
		});
				
				
				
				
				
				
				
				
				/*var sl = parseInt($(this).find('val.sl').text());  	
				$(this).find('val.sl').text(sl+1);		
						
			$(this).addClass('uk-panel-box-success').prepend("<span class='uk-badge uk-width-1-3'>已选<val class='sl'>1</val>份</span><a id='box-succ-close' class='uk-float-right uk-close uk-close-alt'></a>");
			
			*/
			
			 
	
	
	
	
			
	  $("a[href='#print-modal']").on('click',function(e){
	  		$(this).css('width','200px');
		  
		  	e.stopPropagation();
		  	
		  	var modal = $.UIkit.modal("#print-modal");
		  	var menuD = $('div.uk-panel-box-success').find('li');
		  	var table = $('table.uk-table');
		  
				
		  	if ( modal.isActive() ) {
		  		
		  		//table.replaceAll('table.uk-table');
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



















	
	
	
	
	
	
	
	
	
	
