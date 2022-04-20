<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ドレス1',
            'genre' => 'Latin',
            'color' => '赤',
        ];
        DB::table('dresses')->insert($param);

        $param = [
            'name' => 'ドレス2',
            'genre' => 'Standard',
            'color' => '青',
        ];
        DB::table('dresses')->insert($param);

        $param = [
            'name' => 'ドレス3',
            'genre' => 'Latin',
            'color' => '黄',
        ];
        DB::table('dresses')->insert($param);
    }
}
