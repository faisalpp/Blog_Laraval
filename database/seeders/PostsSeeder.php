<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Posts;

require_once "vendor/autoload.php";

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     for($i=0;$i<=50;$i++){
     $faker = \Faker\Factory::create();
     $title = $faker->text(10);
     $slug = str_replace(' ','-',strtolower($title));
     $post = new Posts;
     $post->title = $title;
     $post->slug  = $slug;
     $post->category = "UiDesign";
     $post->excerpt = $faker->text(20);
     $post->content = $faker->text(500);
     $post->image = "ui.png";
     $post->save();
      }
    }
}
