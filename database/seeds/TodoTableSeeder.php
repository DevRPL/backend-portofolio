<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('porotolioes')->insert([
            'title' => 'Aplikasi Koprasi Simpan Pinjam',
            'image' => 'assets/img/karya/koperasi.jpg',
            'description' => 'Php Native + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Check Device Laptop',
            'image' => 'assets/img/karya/device.png',
            'description' => 'Vb.Net + PHP + Firebase + Sqlite',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Operation Integrasi Marketplace',
            'image' => 'assets/img/karya/op.png',
            'description' => 'Laravel 5.7 + Mysql + Develop Team',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Dpkp Sim Cipta Karya',
            'image' => 'assets/img/karya/bangkim.png',
            'description' => 'Codeigniter 2.2.6 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Laravel Mini Forum Programming',
            'image' => 'assets/img/karya/forum.png',
            'description' => 'Laravel 5.6 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Aplikasi Operation Klinik',
            'image' => 'assets/img/karya/nkdc.png',
            'description' => 'Laravel 5.8 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Demo Aplikasi Management Asset',
            'image' => 'assets/img/karya/asset.png',
            'description' => 'Laravel 5.8 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Demo Aplikasi Monitoring Order Card',
            'image' => 'assets/img/karya/dev.jpg',
            'description' => 'Laravel 6.0 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Any Desc',
            'image' => 'assets/img/karya/any.jpeg',
            'description' => 'Laravel 6.0 + Mmsql / Sql Server',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Aplikasi Laundry',
            'image' => 'assets/img/karya/laundrys.png',
            'description' => 'Laravel 6.0 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Program Bantuan Desa',
            'image' => 'assets/img/karya/desa.png',
            'description' => 'Laravel 6.0 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Frontend Layanan Public Desa ',
            'image' => 'assets/img/karya/antrian.png',
            'description' => 'React Bootstrap',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Marketing Of Year',
            'image' => 'assets/img/karya/moy.png',
            'description' => 'Laravel 6.0 + Sql Server',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Inventory Control',
            'image' => 'assets/img/karya/inventory.png',
            'description' => 'Laravel 6.0 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Backend Kredit Kendaraan',
            'image' => 'assets/img/karya/backend.png',
            'description' => 'Laravel 7.0 + mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Frontend Kredit Kendaraan',
            'image' => 'assets/img/karya/frontend.png',
            'description' => 'Laravel 7.0 + Mysql',
        ]);
        DB::table('porotolioes')->insert([
            'title' => 'Personal Framework Management Project',
            'image' => 'assets/img/karya/framework-personal.png',
            'description' => 'Laravel 8.0 + Mysql',
        ]);
    }
}
