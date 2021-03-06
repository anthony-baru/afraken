<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(RolesTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(SubCommittesTableSeeder::class);
		$this->call(UniversitiesTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		
		
    }
}
