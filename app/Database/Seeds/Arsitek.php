<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Arsitek extends Seeder
{
	public function run()
	{
		$insert = [
			[
				'NIA'       => '170700804',
				'password'  => password_hash('password', PASSWORD_DEFAULT),
				'nama'      => 'Rahma',
				'bidang'	=> 'Rumah',
			],
			[
				'NIA'       => '170700805',
				'password'  => password_hash('password', PASSWORD_DEFAULT),
				'nama'      => 'Syukry',
				'bidang'	=> 'Rumah',
			],
			[
				'NIA'       => '170700806',
				'password'  => password_hash('password', PASSWORD_DEFAULT),
				'nama'      => 'Ani',
				'bidang'	=> 'Rumah',
			],
			[
				'NIA'       => '170700807',
				'password'  => password_hash('password', PASSWORD_DEFAULT),
				'nama'      => 'Efen',
				'bidang'	=> 'Rumah',
			],
			[
				'NIA'       => '170700808',
				'password'  => password_hash('password', PASSWORD_DEFAULT),
				'nama'      => 'Endi',
				'bidang'	=> 'Rumah',
			],
		];

		foreach ($insert as $data) {
			$this->db->table('arsitek')->insert($data);
		}
	}
}
