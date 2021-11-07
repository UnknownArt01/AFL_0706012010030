<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenciptaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('penciptas')->insert([
            'pencipta_code' =>'1',
            'pencipta_name' =>'Suko',
            'daerah_asal' =>'Blitar',
            'TTL' =>'Blitar, 02-08-0967',
            'description_pencipta' =>'Seorang Guru seni tari dan Musik di SMP Negeri 1 Blitar dan sering mengikuti erlombaan tari dari berbagai daerah',
        ]);
    }
}
