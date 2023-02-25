<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersPengaduan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_pengaduan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_user', 'users', 'id');
        $this->forge->addForeignKey('id_pengaduan', 'tb_pengaduan', 'id_pengaduan');
        $this->forge->createTable('users_pengaduan');
    }

    public function down()
    {
        $this->forge->dropTable('users_pengaduan');
    }
}
