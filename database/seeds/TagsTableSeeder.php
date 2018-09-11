<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	'name' => 'Julia',
        	'slug' => str_slug('Julia')
        ]);
        DB::table('tags')->insert([
        	'name' => 'C++',
        	'slug' => str_slug('C++')
        ]);
        DB::table('tags')->insert([
        	'name' => 'Wordpress 4.8',
        	'slug' => str_slug('Wordpress 4.8')
        ]);
        DB::table('tags')->insert([
            'name' => 'Last Judgement',
            'slug' => str_slug('Last Judgement')
        ]);
        DB::table('tags')->insert([
            'name' => 'Michelangelo',
            'slug' => str_slug('Michelangelo')
        ]);//renaissance
        DB::table('tags')->insert([
            'name' => 'Renaissance',
            'slug' => str_slug('Renaissance')
        ]);
        DB::table('tags')->insert([
            'name' => 'Art',
            'slug' => str_slug('Art')
        ]);
        DB::table('tags')->insert([
            'name' => 'Art of History',
            'slug' => str_slug('Art of History')
        ]);
    }
}
