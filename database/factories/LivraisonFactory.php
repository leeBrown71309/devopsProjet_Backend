<?php

namespace Database\Factories;

use App\Models\Livraison;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LivraisonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livraison::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelleLivraison' => $this->faker->sentence(),
        ];
    }
}
