<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('you_tubes')->insert([
            'title' => 'Sistem Informasi Aplikasi Mini Laundry',
            'url' => 'https://www.youtube.com/embed/zfF79mHMe-0'
        ]);
        DB::table('you_tubes')->insert([
            'title' => 'Sistem Informasi Aplikasi Mini Inventory Control',
            'url' => 'https://www.youtube.com/embed/6RNJO0HYL08'
        ]);
        DB::table('you_tubes')->insert([
            'title' => 'Sistem Informasi Aplikasi Credit',
            'url' => 'https://www.youtube.com/embed/YmVv9_ucGss'
        ]);
    }
}
