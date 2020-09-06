<?php

use Illuminate\Database\Seeder;
use App\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Category::create(['name' => 'Nature']);
        Category::create(['name' => 'WildLife']);
        Category::create(['name' => 'People']);
        Category::create(['name' => 'Technology']);
        Category::create(['name' => 'Animals']);
        Category::create(['name' => 'Under Water']);
        Category::create(['name' => 'Night']);
    }
}
