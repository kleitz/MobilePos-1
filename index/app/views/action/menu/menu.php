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
  
  
  <body class="uk-container-max uk-height-1-1 uk-text-center">

	 	 	<div class="uk-heading uk-text-middle uk-container-max" data-uk-sticky>

		 	 	<h2> Hey Menu </h2> 	
		 	 		<img class="" src="<?php echo base_url('./favicon.ico') ?>" / >

		 	 	<nav id="headnav">
	 			<ul class="uk-icon">

		 				<hr />
          
		 			<li class="uk-text-left">
          <i href="#" type="button" data-uk-offcanvas="{target:'#menu-optclass'}" class="uk-icon-list-ul uk-icon-medium">  
						
					</i>
          </li>
	 	 
					<li	id="mdbtn" class="uk-text-right">
					<i href="#" type="button" class="uk-icon-external-link-square uk-icon-medium">
							
					</i>
					</li>
	 			
				</ul>
	 	 	 </nav>
	 	 	 
		 	 	 
	 	 	
	 	 	</div>	 

	 	 	<hr />

	 	 
	 
<form class="uk-container-max uk-width-1 uk-text-middle" >
  <fieldset class="uk-text-center"  name="menu">
		
	  
  <?php foreach($list as $li): ?> 
 
<label class="item uk-width-9-10 uk-container-center uk-text-center uk-margin" data-uk-scrollspy="{cls:'uk-animation-fade'}">
<input class="uk-width-1-10 uk-float-left" id="<?php echo $li['dishid'] ?>" type="checkbox" name="item"  value="<?php print_r($li); ?>" >
		<legend hidden="hidden">
			<span class="uk-close uk-float-left"></span>
			<a class="uk-float-right"><var class="sl uk-text-primary uk-badge uk-icon-cutlery">1</var></a>
		</legend>	
		<a class="uk-text-right"><?php echo $li['cm'] ?></a>				  
		<small><var class="uk-text-center uk-icon-jpy uk-width-1-5 uk-badge-price uk-float-right" ><?php echo $li['jg'] ?></var></small>
</label>
  	
      
      <?php endforeach ?>
      
  </fieldset>
</form>


  
  <div id="menu-optclass" class="uk-offcanvas uk-text-bold">
    <div class="uk-offcanvas-bar uk-text-center " >
    	<div class="uk-panel">
    		 <h3 class="uk-panel-title">Menu</h3>
    		 <hr />
        	<ul class="uk-nav uk-nav-side uk-list uk-list-striped">
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
  	
  	  	
  	
  	<div id="menu-print-modal" class="uk-modal uk-container-max">
  	  	
	    <div class="uk-modal-dialog uk-modal-dialog-large uk-modal-dialog-frameless" >
	    
	    
	    <nav class="uk-width-1 uk-text-center uk-container uk-animation-fade">

	    <a  class=" uk-button  uk-width-1-2 uk-float-left uk-animation-silde-left uk-text-left" >
						<i class="uk-width-1 uk-icon-times  uk-modal-close"></i></a>
	  	    
	    <a  class=" uk-button uk-width-1-2 uk-float-right uk-animation-silde-right uk-text-right uk-text-success">
						<i class="uk-width-1 uk-icon-check-square-o uk-text-success"></i></a>
	    
			</nav>
	    
	       	    	<form class="uk-form uk-width-1 uk-container uk-animation-scale-down uk-overflow-container"> 		

							<fieldset class="kay-menu"  name="menu">


							</fieldset>
    		
	     			
	        	</form>
	        
	       	        
		</div>
		
		
  	</div>  




  <div  class="uk-width-1">
		<footer id="footnav"  class="uk-navbar">
		<ul class="uk-navbar-nav uk-width-1-2 uk-animation-slide-top" >
          <li class="uk-width-1">
          <a href="#" type="button"  class="uk-button" data-uk-offcanvas="{target:'#menu-optclass'}" >  
						<i class=" uk-icon uk-icon-refresh uk-icon-medium"></i>  
          </a>
          </li>
       </ul> 
	 	
	 	 <ul class="uk-navbar-nav uk-width-1-2 uk-animation-slide-top">
				<li id="mdbtn"  class="uk-width-1 uk-button uk-text-right">
				<a href="#" type="uk-button" class="uk-button">
					<i id="modalbtn" class="uk-icon uk-icon-reply uk-icon-medium" ></i>
				</a>
				</li>
		</ul>
		</footer>
  </div>

  	  
  </body>
  
  
</html>