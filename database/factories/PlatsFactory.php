<?php

namespace Database\Factories;

use App\Models\Plats;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlatsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plats::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomPlat' => $this->faker->sentence(2),
            'descriptionPlat' => $this->faker->sentence(),
            'jeton' => $this->faker->colorName(),
            'image' => $this->faker->imageUrl(),
            'prix' => 2000.0, 
        ];
    }
}