<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staticpage extends CI_Controller {

	public function index()
	{
     $this->load->view('cms/staticpage/index');
	}

	public function addpage()
	{
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
