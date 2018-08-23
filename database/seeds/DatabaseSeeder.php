<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(Category::class, 48)->create();
    	factory(Post::class, 48)->create();
        //$this->call(UsersTableSeeder::class);
    }
}
