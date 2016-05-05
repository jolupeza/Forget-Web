<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'links';
        $this->orderBy = 'id';
        $this->timestamps = true;
        /*$this->rules = array(
            'name' => array(
                'field' => 'name',
                'label' => 'Nombre',
                'rules' => 'trim|required'
            ),
            'email' => array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'trim|required|valid_email|is_unique[customers.email]'
            ),
            'phone' => array(
                'field' => 'phone',
                'label' => 'Teléfono',
                'rules' => 'trim|required|integer|min_length[7]|max_length[9]'
            )
        );*/
    }

    public function getRules()
    {
        return $this->rules;
    }

    public function updateClick($method = '')
    {
        $this->db->set('click', 'click+1', false);
        $this->db->where('method', $method);
        return $this->db->update($this->tableName);
    }
}