<?php

namespace Database\Factories;

use App\Models\PlatMenu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlatMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlatMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plat_id' => rand(1,5),
            'menu_id' => rand(1,8),
            'quantite' => rand(20,40),
        ];
    }
}
