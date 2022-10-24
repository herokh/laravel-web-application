<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
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
        // \App\Models\User::factory(10)->create();
        // for ($i = 1; $i < 10; $i++) {
        //     $num = strval($i);
        //     $a = new Article([
        //         'name' => 'Article ' . $num,
        //         'description' => 'test test test test test test test test test test test test ',
        //         'created_by' => 'hero',
        //         'updated_by' => 'hero'
        //     ]);
        //     $a->save();
        // }

        $a = Article::all()->first();

        for ($i = 1; $i < 10; $i++) {
            $c = new Comment([
                'description' => 'test comment',
                'created_by' => 'hero',
                'updated_by' => 'hero',
                'article_id' => $a->id
            ]);
            $c->save();
        }
    }
}
