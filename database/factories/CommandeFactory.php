<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $quantite = rand(1,5);
        $prix = 2000*$quantite;
        return [
            'quantite' => $quantite,
            'prix' => $prix,
            'jusTypeJus_id' => rand(1,20),
            'facture_id' => rand(1,5),
            'platMenu_id' => rand(1,24),
            'user_id' => rand(1,10),
        ];
    }
}
