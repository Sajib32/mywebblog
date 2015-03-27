<?php
	
	class PostsTableSeeder extends Seeder {
		public function run() {

			// instantiate faker
			$faker = Faker\Factory::create();

			$authorId = Author::lists('id');

			foreach (range(1,10) as $index) {
				Post::create([
					'author_id' => $faker->randomElement($authorId),
					'title' => $faker->text(10),
					'content' => $faker->text,
					'status' => $faker->randomElement(array('new','approved','spam'))
					
				]);
			}
		}
	}
?>