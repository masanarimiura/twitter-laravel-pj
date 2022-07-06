<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TwesTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
    }
}
