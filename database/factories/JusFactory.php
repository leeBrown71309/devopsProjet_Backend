<?php

namespace Database\Factories;

use App\Models\Jus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomJus' => $this->faker->word(),
            'descriptionJus' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
