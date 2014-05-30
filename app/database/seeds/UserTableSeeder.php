<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Jerome Rendon',
			'type' => 'admin',
			'email'    => 'jerome@scotch.io',
			'password' => Hash::make('jj123'),
		));
	}

}
