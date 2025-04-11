<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_barang')->insert([
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Laptop ASUS',
                'harga_beli' => 16000000,
                'harga_jual' => 17500000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'MacBook Air M1',
                'harga_beli' => 19000000,
                'harga_jual' => 20500000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Monitor 32 inch OLED',
                'harga_beli' => 3500000,
                'harga_jual' => 4200000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Blouse Putih',
                'harga_beli' => 50000,
                'harga_jual' => 65000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Jaket Denim Abu',
                'harga_beli' => 200000,
                'harga_jual' => 250000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Sneakers Adidas',
                'harga_beli' => 600000,
                'harga_jual' => 900000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Roti Sandwich',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Biskuit Roma Kelapa',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Mie Instan',
                'harga_beli' => 3500,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Air Mineral AQUA 1.5L',
                'harga_beli' => 5000,
                'harga_jual' => 8000
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Puply Orange Juice',
                'harga_beli' => 12000,
                'harga_jual' => 18000
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Luwak White Coffee 250g',
                'harga_beli' => 30000,
                'harga_jual' => 40000
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Sanmol 500mg',
                'harga_beli' => 2500,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Sakatonik ABC 1000mg',
                'harga_beli' => 10000,
                'harga_jual' => 15000
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Antiseptik Gel 100ml',
                'harga_beli' => 18000,
                'harga_jual' => 25000
            ],
        ]);
    }
}