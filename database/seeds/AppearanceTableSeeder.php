<?php

use Illuminate\Database\Seeder;

class AppearanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Appearance::create([
        	'icon' => '',
        	'api_key' => 'a2500d818957188618c5c0ae24a841a8',
        	'footer' => 'Some footer text',
        	'keywords' => 'blog,art,artist,renaissance,history,war,christ,michelangelo',
        	'description' => "Welcome to Medium, a place where words matter. Medium taps into the brains of the world's most insightful writers, thinkers, and storytellers to bring you the",
            'theme_id' => 1
        ]);
    }
}
