<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NHANVIEN::class);
        $this->call(NHACUNGCAP::class);
        $this->call(MATHANG::class);
        $this->call(LOAIHANG::class);
        $this->call(KHACHHANG::class);
        $this->call(DONDATHANG::class);
        $this->call(CHITIETDATHANG::class);
   
    }
}
