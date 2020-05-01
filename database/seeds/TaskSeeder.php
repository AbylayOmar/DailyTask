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
            'title' => 'salauat',
            'desc_link' => 'https://www.youtube.com/watch?v=N771fkruaNI'
        ]);
        Task::create([
            'title' => 'kuran'
        ]);
        Task::create([
            'title' => 'dua',
            'desc_link' => 'https://www.youtube.com/watch?v=bbFiESiOrXM'
        ]);
    }
}
