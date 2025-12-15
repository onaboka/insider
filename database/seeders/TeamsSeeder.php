<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            Team::insert([
                ['name' => 'Manchester United'],
                ['name' => 'Real Madrid'],
                ['name' => 'Barcelona'],
                ['name' => 'Liverpool'],
            ]);
        });
    }
}
