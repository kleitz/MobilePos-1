$('Document').ready(function(e){	
 
         
        $("li.menu-item").on('click',function(e){
            
            var init ;
            
            
                
             init = $(e.currentTarget).clone(true); //初始化数据对象
            // 定义数据对象的 appenditem 方法
            // 参数为 event 对象,添加/删除的类名.以及发送的dom地址
            // 当调用该函数时,首先当前点击的处于冒泡的事件节点隐藏
            // 克隆该初始数据发送至节点地址
             function appenditem(init,suc,form){
                    
                    $(e.currentTarget).hide('fast');
                    init.toggleClass(suc).appendTo(form);
                
                    }
                         
            if($(e.currentTarget).hasClass('suc')){
                //判断是否有 suc 类      
                    
                   $(e.currentTarget).find('var.sl>b').text(function(){
                       
                        var sl = parseInt($(this).html());
                        return ++sl;
                   });
                     
                //判断触发节点
                    if($(e.target).is('button.clearitem'))
                    appenditem(init,'suc','#unselect-ul');
           
            }else{
                                    
            appenditem(init,'suc','ul#modal-ul');
                    
                                    
            }
                
        });
        
        
        		
		
		$("#modalbtn").on('click',function(e){
		    var arr = $('li.menu-item.suc');
		    var modal = $.UIkit.modal("#menu-print-modal");
		    modal.options.bgclose = false;
                		if(arr.length===0){
        		
        		$.UIkit.notify({
                    message : 'ERROR ! :( 没点任何菜 !',
                    status  : 'info',
                    timeout : 900,
                    pos     : 'top-center'
                });
    		}else{
        		$(arr).each(function(){
            		//console.log(this);
        		});
        		modal.show();
    		}
    		    		
		});		
				


});								
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
