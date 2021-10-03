<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$title = "Blog";
		$res['title'] = $title;
		$this->load->view('web/blog-list',$res);
	}


	public function blogDetail()
	{

		$title = "Blog Detail";
		$res['title'] = $title;
		$this->load->view('web/blog-detail',$res);
	}
}
