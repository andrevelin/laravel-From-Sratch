<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' =>  'John Doe'
        ]);


        Post::factory(30)->create( [
            'user_id' => $user->id // override the user_id creation with the one created up on the code
            ]
        );

//
    }
}
