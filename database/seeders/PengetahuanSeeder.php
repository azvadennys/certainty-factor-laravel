<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengetahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengetahuan = [
            // Diamond Phyto Stem Cell Serum
            ['kode_serum' => 'S001', 'kode_gejala' => 'G001', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S001', 'kode_gejala' => 'G021', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S001', 'kode_gejala' => 'G013', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S001', 'kode_gejala' => 'G016', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S001', 'kode_gejala' => 'G014', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S001', 'kode_gejala' => 'G012', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S001', 'kode_gejala' => 'G023', 'nilai_cf' => 0.2],

            // 5% Niacinemide + Moisture sabi beet serum
            ['kode_serum' => 'S002', 'kode_gejala' => 'G004', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S002', 'kode_gejala' => 'G009', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S002', 'kode_gejala' => 'G010', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S002', 'kode_gejala' => 'G011', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S002', 'kode_gejala' => 'G006', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S002', 'kode_gejala' => 'G027', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S002', 'kode_gejala' => 'G013', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S002', 'kode_gejala' => 'G021', 'nilai_cf' => 0.4],

            // Lemonade Waterless Vitamin C + Ferulic + NAG
            ['kode_serum' => 'S003', 'kode_gejala' => 'G001', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S003', 'kode_gejala' => 'G022', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S003', 'kode_gejala' => 'G013', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S003', 'kode_gejala' => 'G006', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S003', 'kode_gejala' => 'G021', 'nilai_cf' => 0.6],

            // Dark Spot Reducer Ampoule
            ['kode_serum' => 'S004', 'kode_gejala' => 'G007', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S004', 'kode_gejala' => 'G008', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S004', 'kode_gejala' => 'G013', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S004', 'kode_gejala' => 'G006', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S004', 'kode_gejala' => 'G017', 'nilai_cf' => 0.6],

            // CRIOUSLY 24K GOLD Essence
            ['kode_serum' => 'S005', 'kode_gejala' => 'G001', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S005', 'kode_gejala' => 'G013', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S005', 'kode_gejala' => 'G006', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S005', 'kode_gejala' => 'G022', 'nilai_cf' => 0.2],
            ['kode_serum' => 'S005', 'kode_gejala' => 'G012', 'nilai_cf' => 0.4],

            // Revive Potion 3% Arbutin + Bakuchiol
            ['kode_serum' => 'S006', 'kode_gejala' => 'G013', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G021', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G020', 'nilai_cf' => 0.2],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G010', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G011', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G009', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G006', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G007', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G008', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G004', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G014', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S006', 'kode_gejala' => 'G002', 'nilai_cf' => 0.6],

            // HYALuronic 9+ Advanced +B5 Serum
            ['kode_serum' => 'S007', 'kode_gejala' => 'G004', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S007', 'kode_gejala' => 'G005', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S007', 'kode_gejala' => 'G015', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S007', 'kode_gejala' => 'G016', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S007', 'kode_gejala' => 'G018', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S007', 'kode_gejala' => 'G002', 'nilai_cf' => 0.4],

            // RESURRECT Multibiome Serum
            ['kode_serum' => 'S008', 'kode_gejala' => 'G009', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S008', 'kode_gejala' => 'G010', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S008', 'kode_gejala' => 'G011', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S008', 'kode_gejala' => 'G015', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S008', 'kode_gejala' => 'G013', 'nilai_cf' => 0.4],

            // 3% Astaxanthin + Chlorelina Serum
            ['kode_serum' => 'S009', 'kode_gejala' => 'G001', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S009', 'kode_gejala' => 'G022', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S009', 'kode_gejala' => 'G013', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S009', 'kode_gejala' => 'G017', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S009', 'kode_gejala' => 'G015', 'nilai_cf' => 0.2],
            ['kode_serum' => 'S009', 'kode_gejala' => 'G026', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S009', 'kode_gejala' => 'G025', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S009', 'kode_gejala' => 'G021', 'nilai_cf' => 0.2],

            // 10% Niacinamide Barrier Serum
            ['kode_serum' => 'S010', 'kode_gejala' => 'G001', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S010', 'kode_gejala' => 'G005', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S010', 'kode_gejala' => 'G007', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S010', 'kode_gejala' => 'G009', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S010', 'kode_gejala' => 'G015', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S010', 'kode_gejala' => 'G014', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S010', 'kode_gejala' => 'G012', 'nilai_cf' => 0.2],
            ['kode_serum' => 'S010', 'kode_gejala' => 'G013', 'nilai_cf' => 0.6],

            // Skin Defender Bakuchiol + COQ10 Serum
            ['kode_serum' => 'S011', 'kode_gejala' => 'G009', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S011', 'kode_gejala' => 'G007', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S011', 'kode_gejala' => 'G014', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S011', 'kode_gejala' => 'G012', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S011', 'kode_gejala' => 'G013', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S011', 'kode_gejala' => 'G021', 'nilai_cf' => 0.2],
            ['kode_serum' => 'S011', 'kode_gejala' => 'G018', 'nilai_cf' => 0.6],

            // 2% BHA Salicylic Acid Acne Treatment
            ['kode_serum' => 'S012', 'kode_gejala' => 'G003', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S012', 'kode_gejala' => 'G019', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S012', 'kode_gejala' => 'G014', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S012', 'kode_gejala' => 'G016', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S012', 'kode_gejala' => 'G025', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S012', 'kode_gejala' => 'G026', 'nilai_cf' => 0.4],

            // AHA BHA PHA Peeling Solution
            ['kode_serum' => 'S013', 'kode_gejala' => 'G026', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S013', 'kode_gejala' => 'G019', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S013', 'kode_gejala' => 'G023', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S013', 'kode_gejala' => 'G024', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S013', 'kode_gejala' => 'G020', 'nilai_cf' => 0.4],

            // 60% Vita Propolis + Bee Venom Glow Serum
            ['kode_serum' => 'S014', 'kode_gejala' => 'G001', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S014', 'kode_gejala' => 'G004', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S014', 'kode_gejala' => 'G015', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S014', 'kode_gejala' => 'G016', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S014', 'kode_gejala' => 'G018', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S014', 'kode_gejala' => 'G027', 'nilai_cf' => 0.6],

            // Hylapore Away Solution
            ['kode_serum' => 'S015', 'kode_gejala' => 'G002', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S015', 'kode_gejala' => 'G004', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S015', 'kode_gejala' => 'G017', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S015', 'kode_gejala' => 'G020', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S015', 'kode_gejala' => 'G025', 'nilai_cf' => 0.4],

            // 5% Mandelic Acid Mild Exfoliating Serum
            ['kode_serum' => 'S016', 'kode_gejala' => 'G023', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S016', 'kode_gejala' => 'G026', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S016', 'kode_gejala' => 'G025', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S016', 'kode_gejala' => 'G024', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S016', 'kode_gejala' => 'G020', 'nilai_cf' => 0.6],

            // 10% Lactic + Glycolic Peeling Serum
            ['kode_serum' => 'S017', 'kode_gejala' => 'G026', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S017', 'kode_gejala' => 'G025', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S017', 'kode_gejala' => 'G023', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S017', 'kode_gejala' => 'G024', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S017', 'kode_gejala' => 'G019', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S017', 'kode_gejala' => 'G020', 'nilai_cf' => 0.6],

            // Level 1% Encapsulated Retinol
            ['kode_serum' => 'S018', 'kode_gejala' => 'G019', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S018', 'kode_gejala' => 'G017', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S018', 'kode_gejala' => 'G013', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S018', 'kode_gejala' => 'G014', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S018', 'kode_gejala' => 'G016', 'nilai_cf' => 0.6],

            // 1% Pure Retinol + Squalane
            ['kode_serum' => 'S019', 'kode_gejala' => 'G017', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S019', 'kode_gejala' => 'G013', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S019', 'kode_gejala' => 'G016', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S019', 'kode_gejala' => 'G014', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S019', 'kode_gejala' => 'G021', 'nilai_cf' => 0.4],

            // Granactive Snow Retinoid 2%
            ['kode_serum' => 'S020', 'kode_gejala' => 'G013', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S020', 'kode_gejala' => 'G016', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S020', 'kode_gejala' => 'G017', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S020', 'kode_gejala' => 'G024', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S020', 'kode_gejala' => 'G021', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S020', 'kode_gejala' => 'G022', 'nilai_cf' => 0.4],

            // Salmon DNA + Marine Collagen Elixir
            ['kode_serum' => 'S021', 'kode_gejala' => 'G002', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S021', 'kode_gejala' => 'G012', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S021', 'kode_gejala' => 'G022', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S021', 'kode_gejala' => 'G013', 'nilai_cf' => 0.4],

            // Bakuchiol Skinpair Oil Serum
            ['kode_serum' => 'S022', 'kode_gejala' => 'G012', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S022', 'kode_gejala' => 'G009', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S022', 'kode_gejala' => 'G010', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S022', 'kode_gejala' => 'G011', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S022', 'kode_gejala' => 'G003', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S022', 'kode_gejala' => 'G020', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S022', 'kode_gejala' => 'G004', 'nilai_cf' => 0.6],
            ['kode_serum' => 'S022', 'kode_gejala' => 'G005', 'nilai_cf' => 0.4],
            ['kode_serum' => 'S022', 'kode_gejala' => 'G014', 'nilai_cf' => 0.6],

            // Holygral Multipetide Youth Elixir
            ['kode_serum' => 'S023', 'kode_gejala' => 'G004', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S023', 'kode_gejala' => 'G012', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S023', 'kode_gejala' => 'G022', 'nilai_cf' => 0.8],
            ['kode_serum' => 'S023', 'kode_gejala' => 'G014', 'nilai_cf' => 0.6],
        ];

        DB::table('pengetahuan')->insert($pengetahuan);
    }
}
