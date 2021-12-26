<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class ToDosController extends Controller
{

    public function home(){

        //fetch all todos from the db
        //display all todos in the todos.index page
        return view('todo.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo){

        return view('todo.show')->with('todo', $todo);

    }

    public function create(){
        
        return view('todo.newTodo');
    }

    public function save(){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success', 'Todo Created Successfully');
        
        return redirect('/');
    }

    public function edit(Todo $todo){
        

        return view('todo.edit')->with('todo', $todo);

    }

    public function update(Todo $todo){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();


        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();

        session()->flash('success', 'Todo Updated Successfly');

        return redirect('/');


    }

    public function destroy(Todo $todo){

        $todo->delete();
        
        session()->flash('success', 'Todo Deleted Successfly');

        return redirect('/');
    }

    public function complete(Todo $todo){

        $todo->completed = true;

        $todo->save();

        session()->flash('success', 'Todo Completed Successfully');

        return redirect('/');
    }
}
