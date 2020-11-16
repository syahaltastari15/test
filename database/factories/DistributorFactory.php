<?php

namespace Database\Factories;

use App\Models\Distributor;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistributorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Distributor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_distributor' => $this->faker->text(255),
            'alamat' => $this->faker->text,
            'no_telp' => $this->faker->text(15),
        ];
    }
}
