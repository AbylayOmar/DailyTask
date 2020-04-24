<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\DailyResult;

class DailyController extends Controller
{
    public function index($id) {
        $tasks = Task::all();
        $response = [];
        for ($i = 0; $i < count($tasks); $i++) {
            error_log($tasks[$i]);
            $response[$i] = [];
            $response[$i]['id'] = $tasks[$i] -> id;
            $response[$i]['name'] = $tasks[$i] -> name;
            $response[$i]['desc_link'] = $tasks[$i] -> desc_link;
            $response[$i]['count'] = random_int(5, 20);
        }

        return $response;
    }

    public function results(Request $request) {
        $data = $request->json()->all();
        foreach($data['tasks'] as $i) {
            $ds = new DailyResult();
            $ds -> task_id = $i['id'];
            $ds -> user_id = 1;
            $ds -> user_count = $i['count'];
            $ds->save();
        }
        return response("Succes");
    }
}
