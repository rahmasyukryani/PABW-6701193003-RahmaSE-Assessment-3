<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Arsitek extends Migration
{
	public function up()
	{
		# MASING-MASING KOLOM PADA TABEL arsitek
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 15,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'NIA'       => [
				'type'           => 'INT',
				'constraint'     => '11'
			],
			'password'      => [
				'type'           => 'INT',
				'constraint'     => '15',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
			'bidang'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '30'
			],
		]);

		# MENAMBAHKAN PRIMARY KEY --> id
		$this->forge->addKey('id', TRUE);

		# MEMBUAT TABEL arsitek
		$this->forge->createTable('arsitek', TRUE);
	}

	public function down()
	{
		# MENGHAPUS TABEL arsitek
		$this->forge->dropTable('arsitek');
	}
}
