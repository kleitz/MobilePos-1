<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orderdish extends CI_Controller {

		public function __construct(){
			
			
			parent::__construct();
			
			$this->load->library('session','encrypt');
			$this->load->helper(array('url','path'));
		
			
			
		}
		
		
		
		public function menulist($slug=false){
			
			
			
			$this->load->model('home_model');
			$this->home_model->get_menu($slug,'menu_default');
			$this->load->view('header');
			$this->load->view('orderdish/menulist');
			
			
			
			
			
		}		
		
		
		
		
		
		
		
		
		
		
		
		
}