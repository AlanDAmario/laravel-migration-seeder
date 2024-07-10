<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        // $table->string('departure_station', 50);
        // $table->string('arrival_station', 50);
        // $table->dateTime('departure_time');
        // $table->dateTime('arrival_time');
        // $table->string('train_code', 20);
        // $table->tinyInteger('number_of_carriages')->default(3);
        // $table->boolean('in_time')->default(false);
        // $table->boolean('cancelled')->default(false);
        $train = new Train();
        //contenuto delle tabelle
        $train->company = 'Treni Italia';
        $train->departure_station = 'Rome';
        $train->arrival_station = 'Venice';
        $train->departure_time = '2024-07-10 12:00:00';
        $train->arrival_time = '2024-07-10 13:00:00';
        $train->train_code = '123A';
        $train->number_of_carriages = 5;
        $train->in_time = true;
        $train->cancelled = false;
        $train->save();
    }
}
