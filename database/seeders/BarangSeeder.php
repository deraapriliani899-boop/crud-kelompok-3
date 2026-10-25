<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        Barang::truncate();

        $alatLab = [
            ['Mikroskop Binokuler', 'Biologi', 'Baik', 2500000, 5],
            ['Tabung Reaksi', 'Kimia', 'Baik', 15000, 100],
            ['Gelas Beaker 250ml', 'Kimia', 'Baik', 25000, 50],
            ['Gelas Ukur 100ml', 'Kimia', 'Baik', 30000, 40],
            ['Cawan Petri', 'Biologi', 'Baik', 10000, 80],
            ['Pipet Tetes', 'Kimia', 'Baik', 5000, 120],
            ['Bunsen Burner', 'Kimia', 'Rusak Ringan', 150000, 10],
            ['Kaki Tiga', 'Umum', 'Baik', 75000, 15],
            ['Termometer Lab', 'Fisika', 'Baik', 85000, 20],
            ['Timbangan Digital', 'Umum', 'Baik', 1200000, 3],
            ['Erlenmeyer 250ml', 'Kimia', 'Baik', 35000, 35],
            ['Corong Kaca', 'Kimia', 'Baik', 20000, 45],
            ['Rak Tabung Reaksi', 'Kimia', 'Baik', 60000, 25],
            ['Penjepit Tabung', 'Umum', 'Baik', 12000, 90],
            ['Lup Kaca Pembesar', 'Biologi', 'Baik', 40000, 18],
            ['Jas Lab Ukuran L', 'Umum', 'Baik', 120000, 30],
            ['Sarung Tangan Latex', 'Umum', 'Baik', 5000, 200],
            ['Kotak P3K Lab', 'Umum', 'Baik', 150000, 5],
            ['pH Meter Digital', 'Kimia', 'Baik', 850000, 4],
            ['Sentrifuge Mini', 'Biologi', 'Baik', 3200000, 2],
        ];

        foreach ($alatLab as $alat) {
            Barang::create([
                'nama_alat' => $alat[0],
                'kategori' => $alat[1],
                'kondisi' => $alat[2],
                'harga' => $alat[3],
                'stok' => $alat[4],
            ]);
        }
    }
}
