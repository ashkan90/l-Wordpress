<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('post_status');
            $table->string('comment_status');
            $table->text('content');
            $table->string('featured');
            $table->integer('visit_count')->default(0);
            $table->integer('comment_count')->default(0);
            $table->string('post_link')->default(null);
            $table->string('keywords')->nullable();
            $table->string('post_type'); // post - page. Page doesn't have any category
            $table->integer('user_id');

            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
