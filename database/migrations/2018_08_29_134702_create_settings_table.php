<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_title'); // Blog
            $table->string('site_slogan'); // Share what think you, read what they think
            $table->string('site_email'); // admin@blog.com
            $table->string('site_language'); // Turkish -default
            $table->string('home_page'); // default
            $table->string('post_page'); // default
            $table->string('privacy_page');// Burada gizlilik sayfasının url sini tutacak. 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
