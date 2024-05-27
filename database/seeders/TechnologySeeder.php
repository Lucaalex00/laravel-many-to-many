<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techs = ['html', 'css', 'javascript', 'php', 'laravel', 'vueJS'];
        foreach ($techs as $tech) {
            $newTech = new Technology();
            $newTech->name = $tech;
            $newTech->save();
        }
    }
}
