<?php

use Illuminate\Database\Seeder;
use App\Challenge;

class ChallengeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Challenge::create([
            'name' => 'Ramazan Challange',
            'price' => 0,
            'is_free' => true,
            'state' => 'new',
            'url' => 'http://daily.prosthesis.kz/challenges/ramazan'
        ]);

        Challenge::create([
            'name' => 'Book reading Challange',
            'price' => 1000,
            'is_free' => false,
            'state' => 'null',
            'url' => 'https:://google.com'
        ]);
    }
}
