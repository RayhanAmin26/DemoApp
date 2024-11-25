<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks = [
        1=>[
            'id' =>1,
            'name' =>'Task 1',
            'description' =>'This is Task 1'
        ],
        [
            'id' =>2,
            'name' =>'Task 2',
            'description' =>'This is Task 2'

        ],
        [
            'id' =>3,
            'name' =>'Task 3',
            'description' =>'This is Task 3'
        ],
        [
            'id' =>4,
            'name' =>'Task 4',
            'description' =>'This is Task 4'
        ],
        [
            'id' =>5,
            'name' =>'Task 5',
            'description' =>'This is Task 5'
        ]

    ];

        function index(){
            // return response ($this->tasks);
            return response()->json($this->tasks);
        }

        function show($taskID){
            $actualTask = $taskID-1;
            return response("Task ID is {$taskID}, and Actual task ID is {$actualTask}");
        }
}
