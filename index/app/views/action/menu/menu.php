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
	   <button type="button"  id="modalbtn" class="uk-width-1-2 uk-button uk-icon uk-icon-external-link-square uk-icon-large uk-float-right uk-text-right" ></button>  
 		</div>
 	</nav>
 	 	
    

  

  <ul class="uk-list uk-list-space uk-text-center" type="square">
	  
  <?php foreach($list as $li): ?>  
  
  	<li class="item uk-text-center uk-width-8-10 uk-container-center uk-grid-preserve" varue="<?php echo $li['dishid'] ?>" >
	  	
	  	
	  	
	  	
	  	<div class="uk-grid uk-grid-preserve" hidden="hidden">
	  	<span class="uk-width-1-2 uk-icon-minus-circle uk-text-left uk-close-alt"></span>
	  	<span class="uk-width-1-2 uk-text-right uk-icon-cutlery" >&nbsp; <var class="sl uk-text-primary uk-float-right">1 </var></span>
	  	</div>
	  
	  	<tt class="uk-width-1 uk-grid-preserve">  		  	
	  
	  	 <var class="cm uk-width-1-2 uk-text-left"><?php echo $li['cm'] ?></var>  
	  
	  
	  	 <var class="jg uk-width-3-10  uk-icon-jpy uk-badge-price uk-float-right"><?php echo $li['jg'] ?></var>	
	  
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
  	
  	  	
  	
  	<div id="menu-print-modal" class="uk-modal uk-container-center uk-width-1">
  	  	
	    <div class="uk-modal-dialog uk-modal-dialog-large uk-modal-dialog-frameless uk-container-center">
	    
	    
	    <nav class="uk-container-center">
	    <a  class=" uk-button uk-modal-close uk-width-1-3  uk-text-center" ><i class="uk-text-center uk-icon-button uk-icon-ban"></i></a>
	  	    
	    <a  class=" uk-button uk-width-1-3 uk-float-right " ><i class="uk-text-center uk-icon-button uk-icon-check-square-o "></i></a>
	    </nav>
	    
	    
	        <div class="uk-overflow-container uk-panel uk-panel-box">
	        	
	        	
	        	<caption class="uk-container uk-cantainer-center uk-width-1" >
	        	
	        	
	        	<h3 class="uk-text-bold uk-text-center" >菜单预览</h3>
	        	
	 
	        	</caption>
	        	
	        	<hr />

	        	<table class="uk-table uk-width-8-10 uk-container-center">
	        		
	        	
	        		
	        		<tbody >
	        		
	        		</tbody>
	     			
	        	</table>
	        
	        </div>
	        
		</div>
		
		
  	</div>  
  	  
  </body>
  
  
</html>