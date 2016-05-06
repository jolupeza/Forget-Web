<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Link extends Frontend_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Link_model');
    }

    public function seed()
    {
        $this->Link_model->truncate();

        $methods = [
            'facebook',
            'twitter',
            'whatsapp',
            'email',
            'phone',
        ];

        foreach ($methods as $method) {
            $data = [
                'method' => $method,
                'click' => 0,
            ];

            $this->Link_model->save($data);
        }

        echo 'Seeder worked!';
    }
}
