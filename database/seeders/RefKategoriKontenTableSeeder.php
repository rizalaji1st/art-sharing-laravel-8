<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RefKategoriKonten;

class RefKategoriKontenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RefKategoriKonten::query()->delete();

        RefKategoriKonten::create(['nama' => 'Illustration']);
        RefKategoriKonten::create(['nama' => 'Paint']);
        RefKategoriKonten::create(['nama' => 'Photography']);
    
    }
}
