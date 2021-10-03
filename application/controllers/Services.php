<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$title = "Service";
		$res['title'] = $title;
		$this->load->view('web/service-list',$res);
	}

	public function serviceDetail() 
	{
		$title = "Service";
		$res['title'] = $title;
		$this->load->view('web/service-detail',$res);
	} 
}
