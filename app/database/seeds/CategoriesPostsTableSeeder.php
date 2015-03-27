<?php
	
	class CategoriesPostsTableSeeder extends Seeder {
		public function run() {

			// instantiate faker
			$faker = Faker\Factory::create();

			$categoriesId = Categories::lists('id');
			$postId = Post::lists('id');

			foreach (range(1,10) as $index) {
				CategoriesPost::create([
					'categories_id' => $faker->randomElement($categoriesId),
					'post_id' => $faker->randomElement($postId),
				]);
			}
		}
	}
?>