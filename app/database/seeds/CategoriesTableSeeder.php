<?php
	
	class CategoriesTableSeeder extends Seeder {
		public function run() {

			// instantiate faker
			$faker = Faker\Factory::create();

			foreach (range(1,10) as $index) {
				Categories::create([
					'name' => $faker->name,
					'description' => $faker->text(20)
				]);
			}
		}
	}
?>