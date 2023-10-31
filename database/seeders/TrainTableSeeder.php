<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /*  $trains = config("trains_data.trains");
        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->azienda = $train['azienda'];
            $new_train->stazione_di_partenza = $train['stazione_di_partenza'];
            $new_train->orario_di_partenza = $train['orario_di_partenza'];
            $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
            $new_train->codice_treno = $train['codice_treno'];
            $new_train->numero_carozze = $train['numero_carozze'];
            $new_train->in_orario = $train['in_orario'];
            $new_train->cancellato = $train['cancellato'];
            $new_train->save();
        } */
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->azienda = $faker->randomElement(['trenitalia', 'Frecciarossa', 'Intercity', 'Eurocity ']);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->bothify('??####');
            $new_train->numero_carozze = $faker->numberBetween(1, 10);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}
