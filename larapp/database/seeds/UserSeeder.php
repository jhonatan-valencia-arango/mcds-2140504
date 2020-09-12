<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname'      => 'Jeremias Springfield',
            'email'         => 'jeremias@gmail.com',
            'phone'         => 321658974,
            'birthdate'     => '1970-08-07',
            'gender'        => 'Male',
            'address'       => 'Evergreen Avenue',
            'password'      => bcrypt('admin'),
            'role'          => 'Admin',
            'created_at'    => now(),
        ]);

        $usr = new User;
        $usr->fullname = 'Homer Simpson';
        $usr->email = 'HomerSimpson@gmail.com';
        $usr->phone = 3256987456;
        $usr->birthdate = '1988-10-10';
        $usr->gender = 'Male';
        $usr->address = 'Evergreen Avenue';
        $usr->password = bcrypt('123');
        $usr->save();

        //Factory

        factory(User::class, 100)->create();
    }
}
