<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Panggil seeder lain di sini jika diperlukan

        // Contoh untuk memanggil seeder lain:
        // $this->call(BarangSeeder::class);
        // $this->call(SatuanSeeder::class);

        // Contoh seeding langsung
        DB::table('barang')->insert([
            'kode_barang' => 'B001',
            'nama_barang' => 'Barang Satu',
            'harga_barang' => 10000.00,
            'deskripsi_barang' => 'Deskripsi Barang Satu',
            'satuan_barang_id' => 1,
        ]);

        DB::table('satuan')->insert([
            'kode_satuan' => 'S001',
            'nama_satuan' => 'Satuan A',
        ]);
    }
}
