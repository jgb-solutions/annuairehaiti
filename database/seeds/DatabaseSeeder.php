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
        $this->call(UsersTableSeeder::class);
        $this->command->info('Users table seeded!');

        $this->call(CategoriesTableSeeder::class);
        $this->command->info('Categories table seeded!');

        $this->call(DepartmentsTableSeeder::class);
        $this->command->info('Departments table seeded!');

        $this->call(CitiesTableSeeder::class);
        $this->command->info('Cities table seeded!');

        $this->call(TownsTableSeeder::class);
        $this->command->info('Towns table seeded!');
    }
}