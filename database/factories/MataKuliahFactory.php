<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataKuliah>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_mk' => fake()->randomElement(['Pengantar Teknologi Informasi', 'Konsep Pemrograman', 'Pemrograman Web']),
            'kode_mk' => fake()->numberBetween(1000000000, 9999999999),
            'semester' => fake()->numberBetween(1, 7),
        ];
        
    }
}
