<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TemaModel;

class TemaMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Truncate Existing Data
        TemaModel::truncate();

        // 2. Read JSON Data
        $json = file_get_contents(base_path('database/seeders/json/tema_m.json'));
        $tema = json_decode($json, true);

        // 3. Decode JSON Data
        $tema = collect($tema);

        foreach ($tema as $data) {
            TemaModel::create($data);
        }
    }
}
