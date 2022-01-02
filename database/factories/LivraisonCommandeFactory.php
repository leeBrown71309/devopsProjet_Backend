<?php

namespace Database\Factories;

use App\Models\LivraisonCommande;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LivraisonCommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LivraisonCommande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'facture_id' => rand(1,5), 
        ];
    }
}

