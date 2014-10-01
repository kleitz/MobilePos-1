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
  
  
  <body class="uk-height-mini-1-1 uk-text-center">
  <section id="selected" class="uk-nbfc uk-container-max uk-vertical-align" data-uk-scrollspy="{cls:'uk-animation-slide-top'}" data-uk-sticky>
                    <div class="uk-vertical-align-bottom">
					
					<a  type="button" class="uk-text-left uk-align-left uk-icon-th-large uk-vertical-align-bottom uk-icon-large  " data-uk-offcanvas="{target:'#menu-optclass'}" > </a> 
					<a  id="targetm" type="button" class="uk-text-right uk-align-right uk-vertical-align-bottom uk-icon-list-alt uk-icon-large " > </a>
               
                    </div>
             <hr />
    </section>
    
  
        <div class="uk-nbfc-alt uk-heading uk-width-1 uk-container-max">
		 	 
		 	 	<nav id="headnav" class="uk-width-1">
	 			<ul class="uk-icon">
          
				
        <blockquote class="uk-text-left"> 

										Hey Menu

								<img class="uk-thumbnail-kay uk-text-center uk-margin" src="<?php echo base_url('./favicon.ico') ?>" / >
                <img class="uk-thumbnail-kay-lb uk-text-center uk-margin" src="<?php echo base_url('./public/img/banner-1.png') ?>" / >
        </blockquote>
					
	 			
				</ul>
	 	 	 </nav>
	 	 	
               </div>


<form id="untreated-form"  class="uk-container-max uk-width-1 uk-vertical-align" data-uk-scrollspy="{cls:'uk-animation-fade'}">
  
		 
	  
  <?php foreach($list as $li): ?> 

<fieldset class="item uk-container-max uk-text-justify uk-margin"  form="order-manu" name="ordermenu">
<input class="uk-float-right uk-text-center" id="<?php echo $li['dishid'] ?>" type="checkbox" name="item" >
		<div class="uk-hidden">
		<a class="uk-close uk-close-alt"></a>
        <a class="sl uk-badge uk-text-right uk-float-right"><var class="uk-text-primary uk-icon-cutlery">1</var></a>
		</div>	
		<a class="uk-text-center uk-align-center"><?php echo $li['cm'] ?></a>				  
		<a class="uk-text-center uk-icon-jpy  uk-badge-price uk-align-center" ><var><?php echo $li['jg'] ?></var></a>

</fieldset>	
      
      <?php endforeach ?>
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
  	
  	
  	
  	<div id="menu-modal" class="uk-modal uk-container-max uk-container-center">
  	  	
  	  	
  	  	<nav class="uk-text-center uk-container-max uk-animation-fade">

	    <a  class=" uk-button  uk-width-1-2 uk-float-left uk-animation-silde-left uk-text-left" >
						<i class="uk-width-1 uk-icon-times  uk-modal-close"></i></a>
	  	    
	    <a  class=" uk-button uk-width-1-2 uk-float-right uk-animation-silde-right uk-text-right uk-text-success">
						<i class="uk-width-1 uk-icon-check-square-o uk-text-success"></i></a>
	    
        </nav>
  	  	
	    <div class="uk-modal-dialog uk-modal-dialog-large uk-modal-dialog-frameless" >
	    
	    
	    
	    <div id="print-form" name="order-menu" class="uk-form uk-container-max uk-animation-scale-down uk-overflow-container"> 	
					 	
        </div>
	        
	       	        
		</div>
		
		
  	</div>  



  	  
  </body>
  
  
</html>