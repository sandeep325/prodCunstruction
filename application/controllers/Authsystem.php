<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authsystem extends CI_Controller {

	public function index()
	{
		$title = "Auth System";
		$res['title'] = $title;
		$this->load->view('web/login-register',$res);
	}

	 
}
