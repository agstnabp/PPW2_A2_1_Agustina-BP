<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul'=>$this->faker->randomElement(['bukuuu', 'books', 'buku_biasa']),
            'penulis'=>$this->faker->name(),
            'harga' => $this->faker->randomElement([20000, 15000, 30000]),
            'tgl_terbit'=>$this->faker->date(),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime()
        ];
    }
}
