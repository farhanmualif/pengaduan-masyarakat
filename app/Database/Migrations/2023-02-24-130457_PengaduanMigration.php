<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengaduanMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengaduan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_pengaduan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pesan_pengaduan' => [
                'type' => 'VARCHAR',
                'constraint' => '500',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id_pengaduan', true);
        $this->forge->createTable('tb_pengaduan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pengaduan');
    }
}
