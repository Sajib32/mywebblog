<?php
	
	class CommentsTableSeeder extends Seeder {
		public function run() {

			// instantiate faker
			$faker = Faker\Factory::create();

			$authorId = Author::lists('id');
			$postId = Post::lists('id');

			foreach (range(1,10) as $index) {
				Comment::create([
					'author_id' => $faker->randomElement($authorId),
					'post_id' => $faker->randomElement($postId),
					'content' => $faker->text,
					'status' => $faker->randomElement(array('new','approved','spam'))
					
				]);
			}
		}
	}
?>