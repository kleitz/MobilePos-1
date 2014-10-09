$('Document').ready(function(e){	
 
         
        $("li.menu-item").on('click',function(e){
            
            var init ;
            
            
                
             init = $(e.currentTarget).clone(true); //初始化数据对象并克隆存储
            // 定义数据对象的 appenditem 方法
            // 参数为 event 对象,添加/删除的类名.以及发送的dom地址
            // 当调用该函数时,首先当前点击的处于冒泡的事件节点隐藏
            // 克隆该初始数据发送至节点地址
             function appenditem(init,suc,form){
                    
                    $(e.currentTarget).hide('fast',function(){
                        $(this).detach();
                        init.toggleClass(suc).prependTo(form);
                    })
                
                    }
                         
            if($(e.currentTarget).hasClass('suc')){
                //判断是否有 suc 类      
                    
                   $(e.currentTarget).find('var.sl>b').text(function(){
                       
                        var sl = parseInt($(this).text());
                        return ++sl;
                   });
                     
                //判断触发节点
                    if($(e.target).is('button.clearitem'))
                    appenditem(init,'suc','#unselect-ul');
           
            }else{
                                    
            appenditem(init,'suc','ul#modal-ul');
                    
                                    
            }
                
        });
        
        
        var  modal = $.UIkit.modal("#menu-print-modal");
		var  notify = $.UIkit.notify; //
		$("#modalbtn").on('click',function(e){
                modal.li =  $('li.menu-item.suc');// 取得选取数据
                modal.submit = $('#booking>button'); //  取得发送按钮
                modal.options.bgclose = false; // 关闭"背景关闭遮罩"选项                
                if(modal.li.length==0){
		            		
        		notify({
                    message : ' <e class="uk-icon-frown-o"> <b> Error </b> </e>  <p>什么都没点 ! </p>',
                    status  : 'info',
                    timeout : 2000,
                    pos     : 'top-center'
                });
    		
    		}else{
    		
    		    modal.show();

    		    var ajaxHXR = function ajaxHXR(arrobj,dom){
    		    
    		        $(dom).each(function(n){
                    
            		arrobj.push(n={
            		 
            		   id : this.id , 
            		   cm : $.trim($(this).find('var.cm').text()), 
            		   jg : parseInt($(this).find('var.jg').text()),
            		   sl : parseInt($(this).find('var.sl').text()),
            		   
            		   })
            		   
            		   
        		   
        		   
    		   }).serialize();
    		   
    		   
                    		   
    		   }
    		   
    		   

        		$(modal.submit).on('click',function(){
        		    var ajaxH = new Array();
        		    ajaxHXR(ajaxH,modal.li);
        		    var ajaxURL = $(this).attr('base')+'order';
        		    
            		$.ajax({
                		url:ajaxURL,
                		data:{item:ajaxH},
                		type:'post',
    
                		
            		});
        		});
    		
    		}
    		    		
		});		
				


});								
				
						
		 
				




















	
	
	
	
	
	
	
	
	
	
