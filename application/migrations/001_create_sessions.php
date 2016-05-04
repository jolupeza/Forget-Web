<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_sessions extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'VARCHAR',
                'constraint' => 40
            ],
            'ip_address' => [
                'type' => 'VARCHAR',
                'constraint' => 45
            ],
            'timestamp' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'default' => 0
            ],
            'data' => [
                'type' => 'BLOB'
            ]
        ]);

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('ci_sessions');
        $this->db->query('ALTER TABLE `ci_sessions` ADD KEY `timestamp_idx` (`timestamp`)');
    }

    public function down()
    {
        $this->dbforge->drop_table('ci_sessions');
    }
}