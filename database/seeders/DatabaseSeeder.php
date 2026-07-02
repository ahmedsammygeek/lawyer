<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\CaseStepSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(ServiceSeeder::class);
        $this->call(CaseStepSeeder::class);
    }
}
