<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* 
            to create fake data in the database just uncomment the
            section below and run "php artisan db:seed" in the terminal.
            you can also modify the number of each data by just modify
            the number in brackets..
        */

        \App\Models\Role::factory(2)->create();
        \App\Models\Plats::factory(5)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Jus::factory(5)->create();
        \App\Models\TypeJus::factory(2)->create();
        \App\Models\Menu::factory(8)->create();
        \App\Models\PlatMenu::factory(24)->create();
        \App\Models\JusTypeJus::factory(20)->create();
        \App\Models\Facture::factory(5)->create();
        \App\Models\Commande::factory(15)->create();
        \App\Models\Livraison::factory(15)->create();
        \App\Models\LivraisonCommande::factory(15)->create();
    }
}