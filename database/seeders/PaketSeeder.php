<?php

namespace Database\Seeders;

use App\Models\PaketModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paket = [
            ['paket' => 'Paket 1', 'harga' => '1000'],
            ['paket' => 'Paket 2', 'harga' => '10000'],
            ['paket' => 'Paket 3', 'harga' => '100000'],
        ];
        foreach ($paket as $paketData) {
            PaketModel::create($paketData);
        }
    }
}
