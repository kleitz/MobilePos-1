<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="<?php echo  base_url('public/css/Action.menu.css');?>" />
	<script src="<?php echo base_url('public/js/Action.menu.js') ?>"></script>
  </head>
  
  
  <body class="uk-container-center uk-height-1-1 uk-width-1-1">
  
  
 	
	   <a  class="uk-button uk-icon uk-icon-navicon uk-icon-large" data-uk-offcanvas="{target:'#menu-options',bgclose:true}"></a>

	   <a href="#print-modal-a" class="uk-button uk-icon uk-icon-check-square-o uk-icon-large uk-float-right" data-uk-modal="{target:'#print-modal',bgclose:false}">  </a>  
	
   

    

  
  
  
  <ul class="uk-list uk-list-line uk-list-space uk-text-bold uk-text-middle uk-text-center" data-uk-margin>
  <?php foreach($list as $li): ?>  		 
      <li class="uk-width-1-1 uk-grid uk-grid-preserve menu-item" value="<?php echo $li['dishid'] ?>">
      	<div class="uk-width-1-3"><img class="uk-thumbnail uk-thumbnail-mini" src="<?php echo base_url('/public/img/test.jpg') ?>"></div>
      	<e class="uk-width-1-3 uk-text-middle export"><?php echo '<val class="cm">'.$li['cm'].'</val>' ?></e>
       <b class="uk-badge uk-badge-success uk-badge-notification uk-float-right">
       <h4> <span class="uk-icon-jpy"><?php echo '<val class="jg">'.$li['jg'].'</val>' ?></span></h4>
       </b>
       </li>
      
      <?php endforeach ?>
  
  <div id="menu-options" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav data-uk-margin>
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
  
  
  
  
  	<div id="print-modal" class="uk-modal" >
    	<div class="uk-modal-dialog uk-modal-dialog-frameless" data-uk-modal="{target:'#print-modal',bgclose:false}">
       		 <a href="#print-modal-a" class="uk-modal-close uk-close uk-close-alt" ></a>
	   		 
	   		 <table class="uk-table uk-text-bold">
	   		 
	   		  
	   		 	<tr class="uk-grid" data-uk-margin>
	   		 
	   		 	<input class="uk-button uk-width-1-3" type="button" value="菜品" />
	   		 	<input class="uk-button uk-width-1-3" type="button" value="数量" />
	   		 	<input class="uk-button uk-width-1-3" type="button" value="价格" />
	   		 	
	   		 	
	   		 	</tr>
	   		 	
	   		 	
	   		 	
	   		 	
	   		 
	   		 </table>
	   		 
		</div>
	</div>
  
  </body>
  
  
</html>