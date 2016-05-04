<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_customers extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
           'id' => [
               'type' => 'INT',
               'constraint' => 11,
               'unsigned' => true,
               'auto_increment' => true
           ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'unique' => true
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 9
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => '0000-00-00 00:00:00'
            ],
            'modified_at' => [
                'type' => 'DATETIME',
                'default' => '0000-00-00 00:00:00'
            ]
        ]);

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('customers');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}