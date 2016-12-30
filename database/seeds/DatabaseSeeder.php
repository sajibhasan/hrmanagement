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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
           'name' =>'sajib',
            'email' => 'shahadoth007@gmail.com',
            'password' => Hash::make('@#c$dc7sa6dat#@!'),
        ]);
    }
}
