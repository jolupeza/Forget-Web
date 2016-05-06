<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_links extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'method' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'click' => [
                'type' => 'SMALLINT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => '0000-00-00 00:00:00',
            ],
            'modified_at' => [
                'type' => 'DATETIME',
                'default' => '0000-00-00 00:00:00',
            ],
        ]);

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('links');
    }

    public function down()
    {
        $this->dbforge->drop_table('links');
    }
}
