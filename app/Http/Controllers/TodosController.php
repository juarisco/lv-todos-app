<?php

namespace App\Http\Controllers;

use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todo)
    {
        return view('todos.show')->with('todo', Todo::find($todo));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);
        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }

    public function edit($todo)
    {
        $todo = Todo::find($todo);
        return view('todos.edit')->with('todo', $todo);
    }

    public function update($todo)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo = Todo::find($todo);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/todos');
    }
}
