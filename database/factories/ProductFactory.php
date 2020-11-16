<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->text(255),
            'tanggal_masuk' => $this->faker->date,
            'harga_barang' => $this->faker->randomNumber(0),
            'stok_barang' => $this->faker->randomNumber(0),
            'keterangan' => $this->faker->text,
            'distributor_id' => \App\Models\Distributor::factory(),
            'type_id' => \App\Models\Type::factory(),
        ];
    }
}
