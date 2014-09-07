<!DOCTYPE html>
<html lang="zh-CN" class="uk-text-center uk-height-1-1">
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="<?php echo  base_url('public/css/Action.menu.css');?>" />
	<script src="<?php echo base_url('public/js/Action.menu.js') ?>"></script>
  </head>
  
  
  <body class="uk-container-center uk-height-1-1 uk-width-1-1 ">
  
  
 	<nav class="uk-width-1-1">
	   
	   <a  class="uk-button uk-icon uk-icon-navicon uk-icon-large" data-uk-offcanvas="{target:'#menu-options',bgclose:true}"></a>

	   <a  id="printM-target" class="uk-button uk-icon uk-icon-check-square-o uk-icon-large uk-float-right" data-uk-modal="{target:'#print-modal',bgclose:false}">  </a>  
	
 	</nav>

    

  
  
  
  <ul class="uk-list uk-list-line uk-list-space uk-text-bold uk-text-middle uk-text-center uk-height-1-1" data-uk-margin>
 
  <?php foreach($list as $li): ?>  		 
      <li class="uk-width-1-1 uk-grid uk-grid-preserve menu-item" value="<?php echo $li['dishid'] ?>">
      	<img class="uk-thumbnail uk-width-1-6" src="<?php echo base_url('/public/img/test.jpg') ?>">
      	<e class="uk-width-1-3 uk-text-middle export"><?php echo '<val class="cm">'.$li['cm'].'</val>' ?></e>
       <b class="uk-badge uk-badge-success uk-badge-notification uk-float-right">
       <h4> <span class="uk-icon-jpy"><?php echo '<val class="jg">'.$li['jg'].'</val>' ?></span></h4>
       </b>
       </li>
      
      <?php endforeach ?>
      
  </ul>
  
  	<div id="menu-options" class="uk-offcanvas uk-container-center uk-text-bold uk-text-middle uk-text-center">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas " data-uk-nav data-uk-margin>
	        <li>
	          <a href="#">火锅/主菜</a>
	        </li>
	        
	        <li>
	          <a href="#">凉菜/素菜</a>
	        </li>
	        
	        <li>
	          <a href="#">荤菜/热菜</a>
	        </li>
	        
	        <li>
	          <a href="#">小炒/特色</a>
	        </li>
	        
	        <li>
	          <a href="#">主食/汤羹</a>
	        </li>
	        
	        <li>
	          <a href="#">其他/新品</a>
	        </li>
	        
	        
        </ul>
    </div>
  </div>
  
  
  	<form id="print-modal" class="uk-modal uk-modal-large" >
    	<div class="uk-modal-dialog uk-modal-dialog-frameless">
       		 <a  class="uk-modal-close uk-close uk-close-alt"> </a>
	   		 
	   		 <table class="uk-table uk-text-bold uk-text-center	uk-table-hover uk-table-condensed">
	   		 
	   		  
	   		 	<tr >
	   		 
	   		 	
	   		 	<td class="uk-width-1-3 "><input class="uk-button uk-width-1" type="button" value="菜品" /></td>
	   		 	<td class="uk-width-1-3"><input class="uk-button uk-width-1" type="button" value="数量" /></td>
	   		 	<td class="uk-width-1-3"><input class="uk-button uk-width-1" type="button" value="价格" /></td>
	   		 	 
	   		 	
	   		 	</tr>
	   		 	
	   		 	
	   		 	
	   		 	
	   		 
	   		 </table>
	   		 
		</div>
	</form>
  
  </body>
  
  
</html>