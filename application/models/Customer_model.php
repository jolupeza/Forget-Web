<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'customers';
        $this->orderBy = 'id';
        $this->timestamps = true;
        $this->rules = array(
            'name' => array(
                'field' => 'name',
                'label' => 'Nombre',
                'rules' => 'trim|required',
            ),
            'email' => array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'trim|required|valid_email|is_unique[customers.email]',
            ),
            'phone' => array(
                'field' => 'phone',
                'label' => 'Teléfono',
                'rules' => 'trim|required|integer|min_length[7]|max_length[9]',
            ),
        );
    }

    public function getRules()
    {
        return $this->rules;
    }

    public function getNew()
    {
        $customer = new stdClass();
        $customer->name = '';
        $customer->email = '';
        $customer->phone = '';

        return $customer;
    }
}
