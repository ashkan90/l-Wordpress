<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
        	'site_title' => 'Blog',
        	'site_slogan' => 'Share what think you, read what they think',
        	'site_email' => 'admin@blog.com',
        	'site_language' => 'Turkish',
        	'home_page' => 'deafult',
        	'post_page' => 'default',
        	'privacy_page' => 'privacy_post_link'
        ]);
    }
}
