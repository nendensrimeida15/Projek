<?php

namespace Database\Seeders;
use App\Models\User;

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
        // \App\Models\User::factory(5)->create();
        User::create([
            'name'=> 'nenden',
            'email'=> 'nendensrmda05@example.com',
            'password'=> bcrypt('password'),
            'namerole'=> 'administrator',
            'isrole'=> '1'
        ]);
    }
}
