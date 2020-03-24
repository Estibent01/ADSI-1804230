<?php

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
        DB::table('users')->insert([
			'fullname'	=>	'Jeremias Springfield',
			'email'	    =>	'jeremias@gmail.com',
			'phone'	    =>	322314589,
			'birthdate' =>  '1958-11-12',
			'gender'	=>	'Male',
			'address'	=>	'Street Siempre Viva',
			'role'		=>	'Admin',
			'password'	=>	bcrypt('Admin'),
		]);

		$user = new App\User;
		$user->fullname = 'David Zapata';
		$user->email 	= 'david@misena.edu.co';
		$user->phone	= 3148706790;
		$user->birthdate= '2002-01-27';
		$user->gender 	= 'Male';
		$user->address 	= 'Cll 105 34-18';
		$user->role 	= 'Admin';
		$user->password = bcrypt('admin');
		$user->save();

		// Factory
		factory(App\User::class, 1000)->create();
			
		
    }
}
