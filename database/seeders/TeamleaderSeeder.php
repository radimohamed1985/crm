<?php

namespace Database\Seeders;

use App\Models\teamleader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamleaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return teamleader::factory()->count(10)->create();
    }
}
