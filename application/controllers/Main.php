<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Customer_model');
	}

	public function index()
	{
		$this->data['logo_md'] = false;
		$this->data['about'] = false;
		$this->data['subview'] = 'frontend/main/index';
		$this->load->view('frontend/layout', $this->getData());
	}

	public function register()
	{
		// Set up the form
		$rules = $this->Customer_model->getRules();
		$this->form_validation->set_message('integer', 'El campo Teléfono debe contener sólo dígitos');
		$this->form_validation->set_message('is_unique', 'El correo ya se encuentra registrado.');
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == true) {
			$data = $this->Customer_model->arrayFromPost(array('name', 'email', 'phone'));
			$this->Customer_model->save($data);

			$this->session->set_flashdata('success', 'Se registró correctamente. Puedes compartir nuestra aplicación con tus amigos haciendo click en cualquiera de los enlaces de abajo.');
			redirect('main/register');
		}

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
