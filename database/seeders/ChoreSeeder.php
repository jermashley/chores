<?php

namespace Database\Seeders;

use App\Models\Chore;
use Illuminate\Database\Seeder;

class ChoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chore::factory(50)->create();
    }
}
