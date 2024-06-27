<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animasi = [
            ['nama' => 'Kulit Berjerawat 1', 'video_animasi' => 'images/animasi/kulit berjerawat1.mp4', 'id_serum' => '[S008,S012,S014,S017,S019]'],
            ['nama' => 'Kulit Berjerawat 2', 'video_animasi' => 'images/animasi/kulit berjerawat2.MOV', 'id_serum' => '[S008,S012,S014,S017,S019]'],
            ['nama' => 'Kulit Berminyak 1', 'video_animasi' => 'images/animasi/kulit berminyak1.mp4', 'id_serum' => '[S015,S017,S022]'],
            ['nama' => 'Kulit Berminyak 2', 'video_animasi' => 'images/animasi/kulit berminyak2.MOV', 'id_serum' => '[S015,S017,S022]'],
            ['nama' => 'Kulit Kering 1', 'video_animasi' => 'images/animasi/kulit kering1.mp4', 'id_serum' => '[S021]'],
            ['nama' => 'Kulit Kering 2', 'video_animasi' => 'images/animasi/kulit kering2.MOV', 'id_serum' => '[S021]'],
            ['nama' => 'Kulit Normal 1', 'video_animasi' => 'images/animasi/kulit normal1.mp4', 'id_serum' => '[S001,S003,S005,S009,S010,S011]'],
            ['nama' => 'Kulit Normal 2', 'video_animasi' => 'images/animasi/kulit normal2.MOV', 'id_serum' => '[S001,S003,S005,S009,S010,S011]'],
            ['nama' => 'Kulit Sensitif 1', 'video_animasi' => 'images/animasi/kulit sensitif1.mp4', 'id_serum' => '[S002,S006,S007,S014,S016,S018,S020,S023]'],
            ['nama' => 'Kulit Sensitif 2', 'video_animasi' => 'images/animasi/kulit sensitif2.MOV', 'id_serum' => '[S002,S006,S007,S014,S016,S018,S020,S023]'],
        ];
        DB::table('animasi')->insert($animasi);
    }
}
