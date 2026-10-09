<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function index()
    {
        $data['tasks'] = (new TaskModel())
            ->where('task_date', date('Y-m-d'))
            ->orderBy('created_at', 'ASC')
            ->findAll();

        return view('pages/home', $data);
    }

    public function about()
    {
        return view('pages/about');
    }
}