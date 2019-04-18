<?php

namespace App\Http\Controllers;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }
}
