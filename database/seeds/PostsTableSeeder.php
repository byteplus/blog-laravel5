<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => Str::random(20),
            'body' => Str::random(100),
        ]);

        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => Str::random(20),
            'body' => Str::random(100),
        ]);        
    }
}
