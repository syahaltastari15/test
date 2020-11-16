<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Jumlah_beli' => $this->faker->randomNumber(0),
            'total_harga' => $this->faker->randomNumber(0),
            'tanggal_beli' => $this->faker->date,
            'user_id' => \App\Models\User::factory(),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
