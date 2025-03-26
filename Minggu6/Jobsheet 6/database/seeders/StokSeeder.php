<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $stok = [];

        for ($i = 1; $i <= 15; $i++) {
            $stok[] = [
                'stok_id' => $i,
                'barang_id' => $i,
                'user_id' => rand(1, 3),
                'stok_tanggal' => Carbon::now()->subDays(rand(1, 30))->toDateTimeString(),
                'stok_jumlah' => rand(1, 50),
            ];
        }

        DB::table('t_stok')->insert($stok);
    }
}