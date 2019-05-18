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
            'name' => 'Raihan',
            'email' => 'raihan@gmail.com',
            'email_verified_at' => new DateTime,
            'password' => bcrypt('bangladesh')
        ]);

        DB::table('users')->insert([
            'name' => 'Raihan',
            'email' => 'bdraihan71@gmail.com',
            'email_verified_at' => new DateTime,
            'password' => bcrypt('bangladesh')
        ]);

        DB::table('users')->insert([
            'name' => 'jihan',
            'email' => 'jihan@gmail.com',
            'email_verified_at' => new DateTime,
            'password' => bcrypt('bangladesh')
        ]);
    }
}
