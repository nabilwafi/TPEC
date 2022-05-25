<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'namabarang' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => '255',
            ],
            'warna' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'ukuran' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'create_at datetime default current_timestamp',
            'update_at datetime default current_timestamp on update current_timestamp',
            'delete_at datetime',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
