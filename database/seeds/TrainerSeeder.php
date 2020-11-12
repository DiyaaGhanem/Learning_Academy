<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'diyaa ghanem',
            'spec' => 'web development',
            'img' => '1.png',
        ]);

                Trainer::create([
            'name' => 'yaser ghanem',
            'spec' => 'web development',
            'img' => '2.png',
        ]);

                Trainer::create([
            'name' => 'deana nassar',
            'spec' => 'english teacher',
            'img' => '3.png',
        ]);

                Trainer::create([
            'name' => 'sarah mahmoud',
            'spec' => 'english teacher',
            'img' => '4.png',
        ]);

                Trainer::create([
            'name' => 'mahmoud ghanem',
            'spec' => 'doctor',
            'img' => '5.png',
        ]);

                Trainer::create([
            'name' => 'marwa ghanem',
            'spec' => 'dentist',
            'img' => '6.png',
        ]);
    }
}
