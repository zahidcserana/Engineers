<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$username         = "admin";
        $password       = "admin";

        $anAdmin = [
            'username'          =>    $username,
            'password'            =>    bcrypt($password),
            'created_at'          =>    date('Y-m-d H:i:s'),
            'updated_at'          =>    date('Y-m-d H:i:s')

        ];
        $obj = DB::table('admin')->where('username', $username)->first();

        if (is_null($obj)) {
            DB::table('admin')->insert($anAdmin);
        }
	}

}
