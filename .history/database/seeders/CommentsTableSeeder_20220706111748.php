<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        Comment::factory()->count()->create();
    }
}
