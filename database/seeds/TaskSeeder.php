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
        Task::create([
            'title' => 'kitap'
        ]);
        Task::create([
            'title' => 'salauat',
            'desc_link' => 'https://www.youtube.com/watch?v=N771fkruaNI'
        ]);
    }
}
