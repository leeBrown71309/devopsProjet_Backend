<?php

namespace Database\Factories;

use App\Models\JusTypeJus;
use Illuminate\Database\Eloquent\Factories\Factory;

class JusTypeJusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JusTypeJus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $typeJus = rand(1,2);
        $prix = 300;
        if($typeJus == 1)
            $prix = 700;
        return [
            'typeJus_id' => $typeJus,
            'jus_id' => rand(1,5),
            'prix' => $prix,
            'quantite' => rand(10,25),
        ];
    }
}
