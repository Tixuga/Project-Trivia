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
        \DB::table('users')->insert([
            'name'      => 'Tixa',
            'email'     => 'phpteste@sapo.pt',
            'password'  => bcrypt('123456789')
        ]);
        factory(\App\User::class,20)->create();
    }
}
