<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Account\User::create([
            'name' => 'Quan Do',
            'country' => 'vn',
            'email' => 'quandvdo@gmail.com',
            'password' => bcrypt('quan90')
        ]);
    }
}
