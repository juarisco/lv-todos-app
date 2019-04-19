<?php

namespace App\Http\Controllers;

use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }
}
