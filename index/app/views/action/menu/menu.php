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
  
  
  <body >
  
 	
 	<nav class=" uk-navbar uk-container-max uk-animation-slide-top" data-uk-sticky>
	 		<ul class="uk-navbar-nav uk-width-1-2" >
          <li class="uk-width-1 uk-float-left uk-text-left">
          <a href="#"   data-uk-offcanvas="{target:'#menu-optclass'}" >  
						<i class=" uk-icon uk-icon-navicon uk-icon-medium"></i>  
          </a>
          </li>
       </ul> 
	 	
	 	 <ul class="uk-navbar-nav uk-width-1-2">
				<li class="uk-width-1 uk-float-right uk-text-center">
				<a href="#" class="uk-text-center">
					<i id="modalbtn" class="uk-icon uk-icon-external-link-square uk-icon-medium" ></i>
				</a>
				</li>
		</ul>
			
		
	 	 
 	</nav>




<form class="uk-form " data-uk-margin>
  <fieldset name="menu" class="uk-text-center uk-animation-scale-down">
		<ul class="uk-list">
	  
  <?php foreach($list as $li): ?> 
 
<label for="<?php echo $li['dishid'] ?>">
	<li class="item uk-width-8-10 uk-container-center uk-text-bold uk-text-center uk-margin">	
		<legend hidden="hidden">
			<input class="uk-width-1" id="<?php echo $li['dishid'] ?>" type="checkbox" name="item"  value="<?php print_r($li); ?>" >
			<span class="uk-close uk-float-left"></span>
			<a class="uk-float-right"><var class="sl uk-text-primary uk-badge uk-icon-cutlery">1</var></a>
		</legend>	
		<a class="uk-text-right"><?php echo $li['cm'] ?></a>				  
		<var class="uk-text-center uk-icon-jpy uk-width-1-5 uk-badge-price uk-float-right" ><?php echo $li['jg'] ?></var>
	</li>
</label>
  	
      
      <?php endforeach ?>
      
  </ul>
  </fieldset>
</form>


  
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
  	  	
	    <div class="uk-modal-dialog uk-modal-dialog-large uk-modal-dialog-frameless uk-container-center" >
	    
	    
	    <nav class="uk-container-center">

	    <a  class=" uk-button uk-modal-close uk-width-1-2  uk-text-left" ><i class="uk-icon-button uk-icon-ban"></i></a>
	  	    
	    <a  class=" uk-button uk-width-1-2 uk-float-right uk-text-right" ><i class=" uk-icon-button uk-icon-check-square-o "></i></a>
	    
</nav>
	    
	    
	        <div class="uk-overflow-container uk-panel uk-panel-box">
	        	
	        	
	        	<caption class="uk-container uk-cantainer-center uk-width-1" >
	        	
	        	
	        	<h3 class="uk-text-bold uk-text-center" >菜单预览</h3>
	        	
	 
	        	</caption>
	        	
	        	<hr />

	        	<form class="uk-form uk-width-8-10 uk-container-center"> 		
	        		
	        		<fieldset>
	        		
	        		</fieldset>
	     			
	        	</form>
	        
	        </div>
	        
		</div>
		
		
  	</div>  
  	  
  </body>
  
  
</html>