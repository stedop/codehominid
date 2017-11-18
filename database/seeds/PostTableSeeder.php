<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('blog_posts')->delete();
        factory(Post::class, 20)->create();
	}
}