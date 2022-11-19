<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
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

        $user = User::factory()->create([
            'name'  =>  'Hero',
            'email' =>  'hero@gmail.com'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::factory(6)->create([
            'user_id'   =>  $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel developer',
        //     'tags'  =>  'test',
        //     'company'   =>  'test',
        //     'location'   =>  'test',
        //     'email'   =>  'test',
        //     'website'   =>  'test',
        //     'description'   =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores doloribus quaerat explicabo, temporibus quidem neque impedit architecto iusto ipsa voluptate reiciendis et, sunt adipisci veritatis aliquid sapiente repellendus recusandae magni.',
        // ]);
    }
}
