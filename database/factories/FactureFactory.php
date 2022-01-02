<?php

namespace Database\Factories;

use App\Models\Facture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Commande;

class FactureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $list = ["en cours","livrée"];
        $status = $list[rand(0,1)];
        return [
            'prixTotal' => rand(2000,10000),
            'typeLivraison' => "express",
            'status' => $status,
            'user_id' => rand(1,10),
        ];
    }
}
