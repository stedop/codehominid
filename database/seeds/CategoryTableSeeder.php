<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('blog_categories')->delete();

		// Test category - 1
		Category::create(array(
				'name' => 'Test category - 1',
				'description' => 'Test category - 1 Meta Desc'
			));

		// Test category - 2
		Category::create(array(
				'name' => 'Test category - 2',
				'description' => 'Test category - 2 Meta Desc'
			));

		// Test category - 3
		Category::create(array(
				'name' => 'Test category - 3',
				'description' => 'Test category - 3 Meta Desc'
			));

		// Test category - 4
		Category::create(array(
				'name' => 'Test category - 4',
				'description' => 'Test category - 4 Meta Desc'
			));
	}
}