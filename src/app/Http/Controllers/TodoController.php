<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $inouts = $request->all();

        $todo = new Todo();
        $todo->fill($inouts);
        $todo->save();

        return redirect()->route('todo.index');

    }
}
