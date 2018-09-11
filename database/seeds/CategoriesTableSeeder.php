<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Uncategorized',
            'slug' => str_slug('uncategorized'),
            'description' => ''
        ]);

        DB::table('categories')->insert([
        	'name' => 'Web Development',
        	'slug' => str_slug('Web Development'),
            'description' => str_random(25)
        ]);
        DB::table('categories')->insert([
        	'name' => 'Data Science',
        	'slug' => str_slug('Data Science'),
            'description' => str_random(25)
        ]);
        DB::table('categories')->insert([
        	'name' => 'General',
        	'slug' => str_slug('General'),
            'description' => str_random(25)
        ]);

        DB::table('categories')->insert([
            'name' => 'Art',
            'slug' => str_slug('Art'),
            'description' => str_random(25)
        ]);
    }
}
