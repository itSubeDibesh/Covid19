<?php

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
            'name' => 'Binaya Karki',
            'email' => 'sayhello@binayakarki.com.np',
            'address' => 'Thimi, Bhaktapur',
            'phone' => '9844444444',
            'password' => Hash::make('Admin123'),
        ]);
    }
}
