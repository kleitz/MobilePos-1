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
  
  
  <body class="uk-height-1-1 uk-text-center">
		

		<div class="uk-heading uk-width-1 uk-container-max uk-nbfc" data-uk-sticky>

		 	 
		 	 	<nav id="headnav" class="uk-width-1">
	 			<ul class="uk-icon">
          
				
						<blockquote class="uk-text-left"> 

										Hey Menu

										<img class="uk-thumbnail-kay uk-text-center" src="<?php echo base_url('./favicon.ico') ?>" / >
										<img class="uk-thumbnail-kay-lb" src="<?php echo base_url('./public/img/banner-1.png') ?>" / >
							</blockquote>
					
	 			
				</ul>
	 	 	 </nav>
	 	 	
</div>

	<section  class=" uk-float-right uk-text-center" data-uk-sticky="{top:250}" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}">
          
				<span class="uk-badge">	

					<i  class="uk-display-block uk-icon-th-large uk-icon-large uk-margin " data-uk-offcanvas="{target:'#menu-optclass'}" data-uk-sticky data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}"> </i> 
					<i  type="button" class="uk-display-block uk-icon-large uk-icon-list-alt uk-margin" data-uk-sticky data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}"> </i>
				</span>
	 	 		</section>

	 	 	
		<form class="uk-container-max uk-width-1 uk-text-middle " data-uk-scrollspy="{cls:'uk-animation-fade'}">
  <fieldset class="uk-text-center"  name="menu">
		
	  
  <?php foreach($list as $li): ?> 
 
<label class="item uk-width-9-10 uk-container-center uk-text-center uk-margin" data-uk-scrollspy="{cls:'uk-animation-fade'}">
<input class="uk-width-1-10 uk-float-left" id="<?php echo $li['dishid'] ?>" type="checkbox" name="item"  value="<?php $li ?>" >
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
  	
  	
  	
  	<div id="menu-print-modal" class="uk-modal uk-container-max uk-container-center">
  	  	
	    <div class="uk-modal-dialog uk-modal-dialog-large uk-modal-dialog-frameless" >
	    
	    
	    <nav class="uk-text-center uk-container-max uk-animation-fade">

	    <a  class=" uk-button  uk-width-1-2 uk-float-left uk-animation-silde-left uk-text-left" >
						<i class="uk-width-1 uk-icon-times  uk-modal-close"></i></a>
	  	    
	    <a  class=" uk-button uk-width-1-2 uk-float-right uk-animation-silde-right uk-text-right uk-text-success">
						<i class="uk-width-1 uk-icon-check-square-o uk-text-success"></i></a>
	    
			</nav>
	    
	       	    <form class="uk-form uk-container-max uk-animation-scale-down uk-overflow-container"> 	
					 			<fieldset id="print-form" class="uk-text-center"  name="menu">
						 				<p> asdnasdaa</p>

    		
					 			</fieldset>
	        	</form>
	        
	       	        
		</div>
		
		
  	</div>  



  	  
  </body>
  
  
</html>