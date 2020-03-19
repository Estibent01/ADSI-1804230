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
            'fullname'  => 'Jeremias Springfiel',
            'email'     => 'jeremias@gmail.com',
            'phone'     => 3239090345,
            'birthdate' => '1950-11-12',
            'gender'    => 'Male',
            'address'   => 'Street Siempre Viva',
            'role'      => 'Admin',
            'password' => Hash::make('admin'),
        ]);

        $user = new App\User;
        $user->fullname  = 'Oscar Fernando Aristizabal';
        $user->email     = 'ofac@misena.edu.co';
        $user->phone     = 3103972380;
        $user->birthdate = '1981-10-18';
        $user->gender    = 'Male';
        $user->address   = 'Cll 128-129';
        $user->role      = 'Admin';
        $user->password  = bcrypt('admin');
        $user->save();

        // Factory
        factory(App\User::class, 100)->create();
    }
}
