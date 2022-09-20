<?php

namespace Database\Seeders;

use App\Models\TahunAkademik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data dummy tahun akademik
        $tahunakademiks = [
            [
                'nmtahunakademik'=>'20221',
                'keterangan'=>'semester ganjil'
            ],
            [
                'nmtahunakademik'=>'20222',
                'keterangan'=>'semester genap'
            ],
        ];
        foreach ($tahunakademiks as $tahunakademik) {
            TahunAkademik::create($tahunakademik);
        }
    }
}
