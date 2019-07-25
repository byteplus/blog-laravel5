<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => 1,
            'post_id' => 1,
            'body' => Str::random(100),
        ]);

        DB::table('comments')->insert([
            'user_id' => 2,
            'post_id' => 2,
            'body' => Str::random(100),
        ]);
        
        DB::table('comments')->insert([
            'user_id' => 2,
            'post_id' => 2,
            'body' => Str::random(100),
        ]); 
    }
}
