<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBlogPostsDefaults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->enum('status', array('draft', 'published'))->default('draft')->index()->change();
            $table->boolean('comments')->default(1)->index()->change();
            $table->boolean('featured')->default(0)->index()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->enum( 'status', array( 'draft', 'published' ) )->index()->change();
            $table->boolean( 'comments' )->index()->change();
            $table->boolean( 'featured' )->index()->change();
        });
    }
}
