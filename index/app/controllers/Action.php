<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class   Action extends CI_Controller {

		 function __construct(){
			
				parent::__construct();
			
			$this->load->library(array('session','encrypt'));
			$this->load->helper(array('url','path','html'));

			
		}

		//   应用默认的模块, 'home' 主页 .  当url中没有任何传参时 , 默认进入主页

	    //  Clist 方法是各个模块首页展示的路由器   它通过 $modul 确定数据及视图模块 , slug确定数据元素
	    
	  
		


		public function clist($modul = 'customers',$slug = false){
	
		  if ( ! is_dir(APPPATH.'views/action/'.$modul)){
		  
		  
		     //var_dump($modul);
		    // 模块不存在
		      show_404();
		  }
		  
		 
	      $this->load->view('header');	  
		  self::vlist($modul,$slug);

		  }
	 
	 
	 
	    //  vlist只负责显示数据
	
			private  function vlist($modul,$slug){  

			 $this->load->model('action_model','',TRUE);
			 $data['list'] = $this->action_model->get_list($modul,$slug);
		     $this->load->view('action/'.$modul.'/'.$modul,$data);
	
	       }

	   
	 	
	 	static function setsees($stus){
		 	
		 // 检测当前 session 状态  , 如果为 true 	
		 
		 if( ! $stus ){
		
	       $HASH = $this->encrypt->encode(rand());
		   $cid = substr($HASH,0,44) ;
		   $oid = substr($HASH,44) ;
		
		// 设置两个 ID 值


			$cmoo_id = array(

					'customers' => array(
										array(

									'cid'    => $cid,
									'zh'     => '' ,
									'time'   => '' ,
									'exp'    => '' ,
									'status' => '' ,
										
										),
									),
					'order'     => array(
										array(

									'oid'    => $oid ,
									'cid'    => $cid ,
									'amount' => '' ,
										
										)
									),
					'order-item' => array(
										array(


									'oid'    => $oid ,
									'dishid' => '' ,
									'sl'     => '' ,
									'ostatus'=> '' ,
										
										),
									),

				     'stus'  =>  1 ,


				     'hash'  => $HASH
				);

			$this->session->set_userdata($cmoo_id); 
			
			return $HASH;
		
		}else{ return 1; }
		 	
		 	
		 	
	 	}
		


	 		public function order(){
		 		
		 		$menu = $_POST;
		 		var_dump($menu['data']);
		 		
		 		
		 		
	 		}












}




	