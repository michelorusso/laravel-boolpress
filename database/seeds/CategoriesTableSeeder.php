<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            'Antipasti',
            'Primi',
            'Secondi',
            'Contorni',
            'Dolci'
        ];

        foreach ($categories as $category_name) {

            $new_category = New Category();
            $new_category->name = $category_name;
            $new_category->slug = Str::slug($new_category->name, '-');
            $new_category->save();
        }
    }
}
