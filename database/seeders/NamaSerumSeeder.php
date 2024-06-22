<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamaSerumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $serums = [
            ['kode_serum' => 'S001', 'nama_serum' => 'Diamond Phyto Stem Cell Serum'],
            ['kode_serum' => 'S002', 'nama_serum' => '5% Niacinemide + Moisture sabi beet serum'],
            ['kode_serum' => 'S003', 'nama_serum' => 'Lemonade Waterless Vitamin C + Ferulic + NAG'],
            ['kode_serum' => 'S004', 'nama_serum' => 'Dark Spot Reducer Ampoule'],
            ['kode_serum' => 'S005', 'nama_serum' => 'CRIOUSLY 24K GOLD Essence'],
            ['kode_serum' => 'S006', 'nama_serum' => 'Revive Potion 3% Arbutin + Bakuchiol'],
            ['kode_serum' => 'S007', 'nama_serum' => 'HYALuronic 9+ Advanced +B5 Serum'],
            ['kode_serum' => 'S008', 'nama_serum' => 'RESURRECT Multibiome Serum'],
            ['kode_serum' => 'S009', 'nama_serum' => '3% Astaxanthin + Chlorelina Serum'],
            ['kode_serum' => 'S010', 'nama_serum' => '10% Niacinamide Barrier Serum'],
            ['kode_serum' => 'S011', 'nama_serum' => 'Skin Defender Bakuchiol + COQ10 Serum'],
            ['kode_serum' => 'S012', 'nama_serum' => '2% BHA Salicylic Acid Acne Treatment'],
            ['kode_serum' => 'S013', 'nama_serum' => 'AHA BHA PHA Peeling Solution'],
            ['kode_serum' => 'S014', 'nama_serum' => '60% Vita Propolis + Bee Venom Glow Serum'],
            ['kode_serum' => 'S015', 'nama_serum' => 'Hylapore Away Solution'],
            ['kode_serum' => 'S016', 'nama_serum' => '5% Mandelic Acid Mild Exfoliating Serum'],
            ['kode_serum' => 'S017', 'nama_serum' => '10% Lactic + Glycolic Peeling Serum'],
            ['kode_serum' => 'S018', 'nama_serum' => 'Level 1% Encapsulated Retinol'],
            ['kode_serum' => 'S019', 'nama_serum' => '1% Pure Retinol + Squalane'],
            ['kode_serum' => 'S020', 'nama_serum' => 'Granactive Snow Retinoid 2%'],
            ['kode_serum' => 'S021', 'nama_serum' => 'Salmon DNA + Marine Collagen Elixir'],
            ['kode_serum' => 'S022', 'nama_serum' => 'Bakuchiol Skinpair Oil Serum'],
            ['kode_serum' => 'S023', 'nama_serum' => 'Holygral Multipetide Youth Elixir'],
        ];

        DB::table('serum')->insert($serums);
    }
}
