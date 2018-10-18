<?php

use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activity = factory(\App\Models\Activity\Activity::class, 20)->create()
            ->each(function($a){
                $a->price()->saveMany(factory(\App\Models\Activity\Price::class,rand(1,3))->make());
                $a->itinerary()->saveMany(factory(\App\Models\Activity\Itinerary::class,rand(5,18))->make());
            })
        ;
    }
}
