<?php
use App\Train;
use Illuminate\Database\Seeder;

class FakerTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= \Faker\Factory::create('it_IT');
        for($i=0; $i<100; $i++){
            $newTrain = new Train();
            
            $newTrain->agency=$faker->randomElement(['Trenitalia', 'Italo','Air']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            // $newTrain->departure_date= $faker->date();
            $newTrain->departure_date = $faker->dateTimeBetween('-3 days', '+3 days');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numberBetween(1000, 3000);
            $newTrain->carriage_number = $faker->numberBetween(1, 10);
            $newTrain->in_time = $faker->randomElement(['yes', 'no']);
            $newTrain->cancelled = $faker->randomElement(['yes', 'no']);
            $newTrain->save();
        }
    }
}
