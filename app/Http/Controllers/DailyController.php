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
        for ($i = 11; $i < count($tasks); $i++) {
            error_log($tasks[$i]);
            $response[$i] = [];
            $response[$i]['id'] = $tasks[$i] -> id;
            $response[$i]['name'] = $tasks[$i] -> title;
            $response[$i]['link'] = $tasks[$i] -> desc_link;
            if ($tasks[$i] -> id >= 12) $response[$i]['name'] .= " ".strval(random_int(5, 20))." bet";
        }

        return json_encode(array_values($response));
    }

    public function results(Request $request) {
        $data = $request->json()->all();
        foreach($data as $i) {
            $ds = new DailyResult();
            $ds -> task_id = $i['id'];
            $ds -> user_id = 1;
            $ds -> result = $i['result'];
            $ds->save();
        }
        return response("Success", 200);
    }
}
