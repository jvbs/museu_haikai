<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            ['background_color' => '#41b883', 'font_color' => '#fff'],
            ['background_color' => '#ff5f45', 'font_color' => '#000'],
            ['background_color' => '#0798ec', 'font_color' => '#fff'],
            ['background_color' => '#fec401', 'font_color' => '#000'],
            ['background_color' => '#1bcee6', 'font_color' => '#fff'],
            ['background_color' => '#adea10', 'font_color' => '#000'],
            ['background_color' => '#ee1a59', 'font_color' => '#000'],
            ['background_color' => '#ba5be9', 'font_color' => '#000'],
            ['background_color' => '#b4b8ab', 'font_color' => '#000'],
            ['background_color' => '#6F2DBA', 'font_color' => '#fff'],
            ['background_color' => '#4AC627', 'font_color' => '#fff'],
        ]);
    }
}
