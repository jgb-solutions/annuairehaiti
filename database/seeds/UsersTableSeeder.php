<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('users')->delete();

		User::create([
		  	'firstname' => env('FIRSTNAME'),
		  	'lastname'	=> env('LASTNAME'),
		  	'email'     => env('USER_EMAIL'),
		  	'password'  => bcrypt(env('USER_PASSWORD')),
		  	'admin'	   => 1
		  ]);
		}
}
