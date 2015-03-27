<?php
	
	class AuthorsTableSeeder extends Seeder {
		public function run() {

			// instantiate faker
			$faker = Faker\Factory::create();

			foreach (range(1,10) as $index) {
				Author::create([
					'username' => $faker->name,
					'display_name' => $faker->name,
					'email' => $faker->email,
					'password' => $faker->text(6)
				]);
			}
		}
	}
?>