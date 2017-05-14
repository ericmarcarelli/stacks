<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Test User',
                'email' => 'testuser@stacksapp.net',
                'password' => '$2y$10$64aXljBvifk4sizpiwfnHuBj9WVPUsEi/iZP6WpWe/L68MDzmy6Ny',
                'remember_token' => NULL,
                'created_at' => '2017-05-14 17:59:04',
                'updated_at' => '2017-05-14 17:59:04',
            ),
        ));
        
        
    }
}