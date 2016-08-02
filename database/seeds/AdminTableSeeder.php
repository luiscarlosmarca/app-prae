<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array(
			'name'=>'Prae',
			'email'=>'prae@gmail.com',
			'password'=>\Hash::make('secret')
			   
			));
		
	}

}
 