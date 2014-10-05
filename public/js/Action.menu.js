$('Document').ready(function(e){	
 
    // 首先需要监控到 item 的 onclick 事件 , 当被点选时触发一个函数	selectItem();
        $("li.menu-item").on('click',function(e){
            
            var item = ({
                
                'init' : $(e.currentTarget),
                
                'appenditem' : function(suc,form){

                    $(e.currentTarget).toggleClass(suc).appendTo(form);
                            
                    },            

                'addsl' : function(obj,node){
                var sl = $(obj).find(node);
                    $(sl).text(sl.value++);
                                        
                    },
                
                
            });
            
            if($(e.currentTarget).hasClass('suc')){
                    item.addsl(this);          
            }else{
                if($(e.target).is('button.clearitem')){
                    
                    item.appenditem('suc','#unselect-ul');
                }else{
                    
                    item.appenditem('suc','ul#modal-ul');
                   
                   }
            }
            
           
            
            
        });
        
				
				


});								
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
