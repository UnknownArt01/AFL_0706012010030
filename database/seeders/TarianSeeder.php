<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarians')->insert([
            'tarian_code' =>'0001',
            'tarian_name' =>'Dhodog One',
            'tipe_tarian' =>'Tradisional kontenporer',
            'pencipta_tari' =>1,
            'tanggal' =>'9-8-2018',
            'description' =>'Tarian yang terinspirasi dari tari kendang bocah dan dimodifikasi menjadi tarian baru',
        ]);
    }
}
