<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Barang>
 */
class BarangFactory extends Factory
{

    protected $model = Barang::class;

    public function definition(): array
    {
        return [
            'nama_alat' => fake()->unique()->words(2, true),
            'kategori' => fake()->randomElement(['Kimia', 'Biologi', 'Fisika', 'Umum']),
            'kondisi' => fake()->randomElement(['Baik', 'Rusak Ringan', 'Rusak Berat']),
            'harga' => fake()->numberBetween(10000, 5000000),
            'stok' => fake()->numberBetween([1, 100]),
        ];
    }
}
