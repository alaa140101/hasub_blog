<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([
        //     'title' => Str::random(30),
        //     'body' => Str::random(300),
        //     'author' => Str::random(10)
        // ]);
        Post::factory()->count(20)->hasComments(4)->create();
    }
}
