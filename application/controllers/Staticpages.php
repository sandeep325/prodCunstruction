<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staticpages extends CI_Controller {

	public function index()
	{
		echo "test";

	}
	public function aboutUs()
	{
		$pageType ='about-us';
		$title = "about";

		$result = [
			'id'=>'1',
			'name'=>'sandeep',
			'desg' =>'software engineer',
		];
		$res['pageType'] = $pageType;
		$res['title'] = $title; 

		$this->load->view('web/staticpage',$res);
	}

	public function contactUs() {
		$pageType ='contact-us';
   $title = "contact";
		$result = [
			'id'=>'1',
			'name'=>'sandeep',
			'desg' =>'software engineer',
		];
		$res['pageType'] = $pageType;
		$res['title'] = $title; 

		$this->load->view('web/staticpage',$res);
	
	}
}
