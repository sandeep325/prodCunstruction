<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staticpage extends CI_Controller {

	public function index()
	{
		$controller_type = "staticpage";
		$result['controller_type'] = $controller_type; 
     $this->load->view('cms/staticpage/index',$result);
	}

	public function addpage()
	{

		// echo onlyYearCur;
		// echo "test"; die;
      $this->load->view('cms/staticpage/addpage');
	}


	public function editpage()
	{
      $this->load->view('cms/staticpage/editpage');
	}

	public function deletepage()
	{


	}

	 
}
