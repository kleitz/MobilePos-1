<!DOCTYPE html>
<html lang="zh-CN" >
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="<?php echo  base_url('public/css/Action.menu.css');?>" />
	<link rel="stylesheet" href="<?php echo  base_url('public/css/addons/uikit.addons.min.css');?>" />

	<script src="<?php echo base_url('public/js/Action.menu.js') ?>"></script>
	<script src="<?php echo base_url('public/js/addons/notify.min.js') ?>"></script>
	<script src="<?php echo base_url('public/js/addons/sticky.min.js') ?>"></script>
  </head>
  
  
  <body >
  
 	<nav class="uk-width-1" data-uk-sticky>
 		<div class="uk-width-1 uk-grid uk-grid-preserve">
	   <button  class="uk-width-1-2 uk-button uk-icon uk-icon-navicon uk-icon-large uk-text-left " data-uk-offcanvas="{target:'#menu-optclass',bgclose:true}"></button>
	   <button  class="uk-width-1-2 uk-button uk-icon uk-icon-check-square-o uk-icon-large uk-text-right" ></button>  
 		</div>
 	</nav>

    

  

<div class="uk-width-1 uk-container uk-container-center">  
  <ul class="uk-width-1 uk-list uk-list-space uk-grid uk-grid-preserve uk-container uk-container-center">
	  
  <?php foreach($list as $li): ?>  		 
      <li class="menu-item uk-width-1 uk-grid uk-grid-preserve " value="<?php echo $li['dishid'] ?>">
      	
      	<span type="button" class="uk-float-left clearItem uk-badge uk-badge-danger uk-badge-notification uk-icon uk-icon-minus uk-icon-medium uk-button" style="display : none"></span>
      		  	
	  	<p class="uk-width-1-2 " ><val class="cm" ><?php echo $li['cm'] ?></val></p>
	    
	    <p class="uk-width-1-2" style="display:none"><val class="sl uk-badge uk-badge-notification">已选1份<val></p>
	  	
	  	<val class="uk-width-2-10 jg uk-badge uk-badge-success uk-badge-notification uk-icon-jpy uk-float-right"><?php echo $li['jg'] ?></val>
	  	
	   </li>
      
      <?php endforeach ?>
      
  </ul>
  
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
  
  
  	  
  </body>
  
  
</html>