<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->call('DeleteTableSeeder');
        $this->command->info('Tables delete!');

        $this->call('UserTableSeeder');
        $this->command->info('User table seeder!');

        $this->call('SectorTableSeeder');
        $this->command->info('Sector table seeder!');

        $this->call('StarTableSeeder');
        $this->command->info('Star table seeder!');

        $this->call('PlanetTableSeeder');
        $this->command->info('Planet table seeder!');

		// $this->call('UserTableSeeder');
	}

}
