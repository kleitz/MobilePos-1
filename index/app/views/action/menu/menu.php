<!doctype html>
<html lang="zh-cn" >
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="<?php echo  base_url('public/css/action.menu.css');?>" />
	<link rel="stylesheet" href="<?php echo  base_url('public/css/addons/uikit.addons.min.css');?>" />

	<script src="<?php echo base_url('public/js/action.menu.js') ?>"></script>
	<script src="<?php echo base_url('public/js/addons/notify.min.js') ?>"></script>
	<script src="<?php echo base_url('public/js/addons/sticky.min.js') ?>"></script>
  </head>
  
  
  <body >
  
 	<nav class="uk-width-1 uk-animation-slide-top">
 		<div class="uk-width-1 uk-grid uk-grid-preserve uk-animation-slide-top">
	   <button  class="uk-width-1-2 uk-button uk-icon uk-icon-navicon uk-icon-large uk-text-left" data-uk-offcanvas="{target:'#menu-optclass'}"></button>
	   <button id="modalbtn" class="uk-width-1-2 uk-button uk-icon uk-icon-check-square-o uk-icon-large uk-text-right print-modaltarget "></button>  
 		</div>
 	</nav>

    

  

 	<div class="uk-width-1 uk-container uk-container-center">  
  <ul class="uk-width-1 uk-list uk-list-space uk-grid uk-grid-preserve uk-container uk-container-center uk-animation-scale-up">
	  
  <?php foreach($list as $li): ?>  
  
  
  	 <span class="clearitem uk-icon uk-icon-minus-circle uk-icon-medium" style="display:none"></span>
  	 <span class="uk-icon uk-icon-cutlery uk-float-right" style="display:none"><val class="sl"><b class="uk-text-primary">1</b></val></span>		 
      <li class="menu-item uk-width-1 uk-grid uk-grid-preserve uk-text-bottom" value="<?php echo $li['dishid'] ?>">  		  	
	  	<val class="cm uk-width-2-3 uk-text-left"  ><?php echo $li['cm'] ?></val></p>
	  	<val class="uk-width-1-3 uk-width-medium-1-10 jg uk-icon-jpy uk-badge"><?php echo $li['jg'] ?></val>	
	   </li>
  
      
      <?php endforeach ?>
      
  </ul>
  
</div>
  
  	<div id="menu-optclass" class="uk-offcanvas uk-text-bold">
    <div class="uk-offcanvas-bar uk-text-center " >
    	<div class="uk-panel">
    		 <h3 class="uk-panel-title">menu</h3>
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
  	
  	
  	
  	
  	<div id="menu-print-modal" class="uk-modal uk-container uk-container-center uk-width-1">
	    <div class="uk-modal-dialog uk-modal-dialog-large uk-modal-dialog-frameless">
	        <a class="uk-modal-close uk-close uk-close-alt"></a>
	        <h2 class="uk-text-bold uk-text-center">清单预览</h2>
	        <div class="uk-overflow-container">
	        	<table class="uk-table uk-width-1 uk-container-center">
	        		
	        
	        	</table>
	        </div>
		</div>
  	</div>  
  	  
  </body>
  
  
</html>