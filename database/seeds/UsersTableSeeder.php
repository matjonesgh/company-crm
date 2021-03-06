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
	    // create the admin user
	    DB::table('users')->insert([
                'name'     => 'admin',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
    }
}
