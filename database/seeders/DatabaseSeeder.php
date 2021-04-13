<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \DB::table('users')->insert([
            'name' => 'admin',
            'email' =>'info@tetrasmart.com',
            'password' => bcrypt('admin'),
            'user_type' => 'admin',
            
        ]);
    }
}
