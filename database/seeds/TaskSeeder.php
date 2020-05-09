<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 11; $i++)
            Task::create([
                'title' => strval($i)
            ]);
            
        Task::create([
            'title' => 'Салауат',
            'desc_link' => 'https://www.youtube.com/watch?v=N771fkruaNI'
        ]);
        Task::create([
            'title' => 'Құран Кәрім'
        ]);
        Task::create([
            'title' => 'Ислам ғылымхалы',
            'desc_link' => 'http://muslim.kz/files/libraries/e7f3697d7d30839fe9d7a9b9ac72c9f9.pdf'
        ]);
    }
}
