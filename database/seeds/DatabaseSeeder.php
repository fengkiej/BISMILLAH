<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('users')->insert([
            'name' => 'candra',
            'username' => 'candragctk',
            'address' => "NULL",
            'rek_name' => "NULL",
            'rek_number' => 0,
            'ktp_path' => "NULL",
            'header_path' => "NULL",
            'avatar_path' => "NULL",
            'email' => 'candra@candra.com',
            'password' => bcrypt('password'),
        ]);

		DB::table('users')->insert([
            'name' => 'amanda',
            'username' => 'amandamad',
            'address' => "NULL",
            'rek_name' => "NULL",
            'rek_number' => 0,
            'ktp_path' => "NULL",
            'header_path' => "NULL",
            'avatar_path' => "NULL",
            'email' => 'amanda@amanda.com',
            'password' => bcrypt('password'),
        ]);

		DB::table('balance_details')->insert([
            'user' => 'amandamad',
            'balance'=> 5000000,
       
        ]);

        DB::table('balance_details')->insert([
            'user' => 'candragctk',
            'balance'=> 10000000,
          
        ]);


		DB::table('users')->insert([
            'name' => 'shiddiq',
            'username' => 'shiddiq',
            'address' => "NULL",
            'rek_name' => "NULL",
            'rek_number' => 0,
            'ktp_path' => "NULL",
            'header_path' => "NULL",
            'avatar_path' => "NULL",
            'email' => 'kecu@kecu.com',
            'password' => bcrypt('password'),
           
        ]);

		DB::table('balance_details')->insert([
            'user' => 'shiddiq',
            'balance'=> 0,
        ]);

    }
}
