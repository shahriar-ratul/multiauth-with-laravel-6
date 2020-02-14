<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'name' => 'ratul',
            'username' => 'ratul',
            'email' => 'ratul794@gmail.com',
            'phone' => '01713525100',
            'gender' => 'male',
            'dob' => '1993-12-11',
            'password' => Hash::make('525100'),
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'superadmin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'phone' => '01863851653',
            'gender' => 'male',
            'dob' => '1994-04-16',
            'password' => Hash::make('01759191983'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => 'admin',
            'gender' => 'male',
            'dob' => '1994-04-16',
            'password' => Hash::make('525100'),
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'AdvanceTeacher',
            'username' => 'AdvanceTeacher',
            'email' => 'advanceteacher@gmail.com',
            'phone' => 'advanceteacher',
            'gender' => 'male',
            'dob' => '1994-04-16',
            'password' => Hash::make('525100'),
        ]);

        User::create([
            'role_id' => 4,
            'name' => 'BasicTeacher',
            'username' => 'BasicTeacher',
            'email' => 'basicteacher@gmail.com',
            'phone' => 'basicteacher',
            'gender' => 'male',
            'dob' => '1994-04-16',
            'password' => Hash::make('525100'),
        ]);


    }
}
