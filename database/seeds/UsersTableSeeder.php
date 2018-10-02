<?php

use Illuminate\Database\Seeder;
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
        $user = User::create([
          'name' => 'bfbernalgo',
          'email' => 'baironbernal@hotmail.com',
          'password' => bcrypt('PASSWORD'),
        ]);
        
        $user->assignRole('admin');


        $susbcriber = User::create([
          'name' => 'susbcriber',
          'email' => 'susbcriber@hotmail.com',
          'password' => bcrypt('PASSWORD'),
        ]);
        
        $susbcriber->assignRole('subscriber');
    }
}
