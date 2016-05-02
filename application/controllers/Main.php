<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Frontend_Controller
{
	public function index()
	{
		$this->data['logo_md'] = false;
		$this->data['about'] = false;
		$this->data['subview'] = 'frontend/main/index';
		$this->load->view('frontend/layout', $this->getData());
	}

	public function register()
	{
		$this->data['logo_md'] = true;
		$this->data['about'] = false;
		$this->data['subview'] = 'frontend/main/register';
		$this->load->view('frontend/layout', $this->getData());
	}

	public function about()
	{
		$this->data['logo_md'] = true;
		$this->data['about'] = true;
		$this->data['subview'] = 'frontend/main/about';
		$this->load->view('frontend/layout', $this->getData());
	}
}
