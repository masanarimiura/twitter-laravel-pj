<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tweet;

class TweetsTableSeeder extends Seeder
{
    public function run()
    {
        ::factory()->count(10)->create();
    }
}
