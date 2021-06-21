<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for( $i = 0; $i < 5 ; $i++) {
            $new_travel = new Post();
            $new_travel->title = $faker->sentence(4);
            $new_travel->content = $faker->paragraphs(4, true);
            $new_travel->slug = Str::slug($new_travel->title, '-');
            $new_travel->save();

        }
    }
}
