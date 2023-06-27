<?php

namespace Database\Seeders;

// importo la Model e il Faker
use Faker\Generator as Faker;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 50; $i++) {
            Train::create([
                'company' => $faker->randomElement(['Compagnia Uno', 'Compagnia Due', 'Compagnia Tre', 'Compagnia Quattro']),
                'departure_station' => $faker->city(),
                'arrival_station' => $faker->city(),
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
                // possiamo utilizzare anche rand per stabilire dei numeri random
                'train_code' => $faker->numerify('#####'),
                'train_cars' => rand(5, 15),
                'is_on_time' => $faker->boolean(),
                'deleted' => $faker->boolean(),
                // 'description' => $faker->paragraph(rand(2, 6), true), // il true serve per farmi ridare una stringa come risultato e non un'array (per l'array dovrei mettere false)
                // 'price' => rand(50000, 1000000),
                // 'is_available' => $faker->boolean(),
                // 'energy_rating' => $faker->randomElement(['A+++', 'A++', 'A+', 'A', 'B', 'C']),
            ]);
        }
    }
}
