<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Frontend_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->driver('session');
        $this->load->library(array('form_validation'));
        $this->load->helper('form');

        $this->data['meta_title'] = $this->config->item('site_name');
    }
}
