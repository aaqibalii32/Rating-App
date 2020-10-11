<?php
/**
 * Created by PhpStorm.
 * User: chusa
 * Date: 5/2/2019
 * Time: 5:47 PM
 */

class Admin_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata("email")){
			redirect('login');
		}else{
			/*LOAD THE LANGUAGE HELPER */
			
			if(isset( $_SESSION['lang'])){
				if($_SESSION['lang'] == 'en'){
					$this->lang->load('menu','english');
				}
				if($_SESSION['lang'] == 'ar'){
					$this->lang->load('menu','arabic');
				}
			}
		
		}
	}
}
