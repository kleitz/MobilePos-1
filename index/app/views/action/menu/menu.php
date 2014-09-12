<!doctype html>
<html lang="en" >
  <head>
    <meta charset='utf-8' />
	<link rel="stylesheet" href="<?php echo  base_url('public/css/addons/uikit.addons.min.css');?>" />
	<link rel="stylesheet" href="<?php echo  base_url('public/css/action.menu.css');?>" />
	<script src="<?php echo base_url('public/js/action.menu.js') ?>"></script>
	<script src="<?php echo base_url('public/js/addons/notify.min.js') ?>"></script>
	<script src="<?php echo base_url('public/js/addons/sticky.min.js') ?>"></script>
  </head>
  
  
  <body>
  
 	
 	<nav class="uk-animation-slide-top uk-container-center" data-uk-sticky>
	   
	   <button type="button"  class="uk-width-1-2 uk-button uk-icon uk-icon-navicon uk-icon-large uk-float-left uk-text-left" data-uk-offcanvas="{target:'#menu-optclass'}"></button>
	   <button type="button"  id="modalbtn" class="uk-width-1-2 uk-button uk-icon uk-icon-check-square-o uk-icon-large uk-float-right uk-text-right"></button>  
 		</div>
 	</nav>
 	 	
    

  

  <ul class="uk-list uk-list-space uk-text-center">
	  
  <?php foreach($list as $li): ?>  
  
  	<li class="item uk-text-center uk-width-8-10 uk-container-center" value="<?php echo $li['dishid'] ?>" >
	  	
	  	
	  	
	  	<tt class="in1 uk-width-1-2" hidden="hidden" >
	  	
	  	 <span class="uk-width-1-2 clearitem uk-icon-minus-circle uk-text-left" ></span>
	  	 <span class="uk-width-1-2 uk-float-right uk-icon-cutlery uk-text-right">&nbsp;&nbsp;<val class="sl"><b class="uk-text-primary">1</b></val>&nbsp;&nbsp;</span>
	  	 </tt>
  	  
	  	<tt class="in2 uk-width-1-2">  		  	
	  	 <val class="cm uk-width-1-2 "  ><?php echo $li['cm'] ?></val>
	  	 <val class="jg uk-width-2-10  uk-icon-jpy uk-badge-price uk-float-right"><?php echo $li['jg'] ?></val>	
	  	</tt>
   
	</li>
  
      
      <?php endforeach ?>
      
  </ul>
  
</div>
  
  	<div id="menu-optclass" class="uk-offcanvas uk-text-bold">
    <div class="uk-offcanvas-bar uk-text-center " >
    	<div class="uk-panel">
    		 <h3 class="uk-panel-title">Menu</h3>
    		 <hr />
        	<ul class="uk-nav uk-nav-side">
	        <li>
	          <a href="#">火锅/主菜</a>
	        </li>
	        
	        <li >
	          <a href="#">凉菜/素菜</a>
	        </li>
	        
	        <li >
	          <a href="#">荤菜/热菜</a>
	        </li>
	        
	        <li >
	          <a href="#">小炒/特色</a>
	        </li>
	        
	        <li >
	          <a href="#">主食/汤羹</a>
	        </li>
	        
	        <li >
	          <a href="#">其他/新品</a>
	        </li>
	        
	        
        </ul>
    	</div>
    </div>
  </div>
  	
  	
  	
  	
  	<div id="menu-print-modal" class="uk-modal  uk-container-center">
  	  	
	    <dialog class="uk-modal-dialog uk-modal-dialog-large uk-modal-dialog-frameless uk-width-1 uk-container-center">
	    
	        <div class="uk-overflow-container uk-panel uk-container uk-width-1 uk-panel-box">
	    
	        	<table class="uk-table uk-width-8-10 uk-container-center">
	        		
	        		<caption class="uk-text-bold uk-text-center"><h3 class="uk-text-bold uk-text-center">清单预览</h3></caption>
	        		
	        		<tbody class="uk-width-1">
	        		
	        		</tbody>
	        
	        	</table>
	        </div>
		</dialog>
		
		<a class="uk-button uk-icon-ban uk-icon-medium uk-width-1"></a>
  	</div>  
  	  
  </body>
  
  
</html>