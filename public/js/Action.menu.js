$(document).ready(function(e){
    

    var suc = 'suc';     
        
  
  //<form id="untreated-form"  class="uk-container-max uk-width-1 uk-vertical-align"
  //<fieldset class="item uk-container-max uk-text-justify uk-margin customfield "  form="order-manu" name="menu">

  
  //<form id="print-form" name="order-menu" class="uk-form uk-container-max uk-animation-scale-down uk-overflow-container"> 

    function voli(e,suc,form,bool){
          
          
            //判断当前冒泡元素是否有 suc 这个类 
           //  如果没有的话,添加 suc 类, 插入到 form
           //   如果有的话, 移除 suc 类 , 插入到 form
            if(bool){
            
            return $(e.delegateTarget).appendTo(form).addClass(suc); 
            
            }                
            return false;
          };

    
     $('fieldset').on('click',function(e){
     var menugroup = $('div#untreated');
     
            if($(e.currentTarget).parent().is(menugroup)){
             var  item  = voli(e,suc,'#print-form',true);  
               $(item).find(':hidden').show('fast');         
           }else{
                voli(e,suc,'#untreated',false);  
               
           }
        
        
        });
        
        
      $('#targetm').on('click',function(e){
          
            var oder = $('fieldset.suc');

                if ( oder.length === 0 ) {
                    $.UIkit.notify({
                        message : '没点任何菜,先选一样',
                        status  : 'info',
                        timeout : 3000,
                        pos     : 'top-center'
                    });

                } else {
                var modal = $.UIkit.modal("div#menu-print-modal");
                    modal.show();
                }
         
          
      }); 
        
        
        
        
        
     
               
});
