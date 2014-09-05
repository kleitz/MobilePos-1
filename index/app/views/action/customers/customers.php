<!DOCTYPE html>
<html lang="zh-CN" >
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="<?php echo  base_url('public/css/Action.home.css');?>" />
	<script src="<?php echo base_url('public/js/Action.home.js') ?>"></script>
  </head>
  
  
  
<body class="uk-container-center uk-height-1-1">

<div class="uk-panel-box">
<form class="uk-width-1 uk-search uk-form uk-grid" data-uk-search>
	
		<button  class="uk-button uk-icon-times uk-width-1-10" type="reset"></button>
		<input class="uk-search-field uk-width-9-10 " type="search" placeholder="要搜索的桌号" />
		
</form>
</div>

<a class="uk-button" href="<?php echo base_url('customers') ?>">首页</a>
<a class="uk-button" href="<?php echo base_url('menu') ?>">菜单</a>


<div class="uk-panel uk-width-1 uk-text-center uk-text-bold uk-panel-box uk-panel-box-secondary">
    <div class="uk-panel-badge uk-badge uk-badge-notification uk-badge-danger">12</div>
    <div class="uk-panel uk-panel-header">
    	<h3 class="uk-panel-title">
    	<span class="uk-icon-user" ></span> 
    	Customers     	
    	</h3>
		
    </div>	
</div>




</body>
</html>