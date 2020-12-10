<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $categories = Category::all();
        foreach($categories as $key => $c) {
            for ($i=1; $i <= 10; $i++) {
                Post::create([
                    'title' => "Post $i",
                    'content' => "<p>este es le contenido del post $i</p>",
                    'url_clean' => "post-$i",
                    'posted' => 'yes',
                    'category_id' => $c->id
                ]);
            }
        }
    }
}
