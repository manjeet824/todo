<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;


class TodoController extends Controller
{
    
 public function show()
{
	return view('todos')->with('todos', Todo::all());
}

public function create(){
	return view('addTodo');
}
public function store(StoreBlogPost $request){
      $todo = new Todo();
      $todo->name = $request['name'];
      $todo->description = $request['description'];
      $todo->completed = false;
      $todo->save();
      return redirect('/');

}
public  function view(Todo $todo)
{
	return view('viewTodo')->with('todo', $todo);
}

public  function edit(Todo $todo)
{
	return view('editTodo')->with('todo', $todo);
}
 public function update(StoreBlogPost $request ,Todo $todo)
    {        
      $todo->name = $request['name'];
      $todo->description = $request['description'];
       $todo->save();
      return redirect('/');
    }
    public function destroy(Todo $todo){
    	$todo->delete();
         return redirect('/');
    }
     public function complete(Todo $todo)
    {
      $todo->completed = true;
      $todo->save();
      session()->flash('success', 'Todo completed successfully.');
      return redirect('/');
    }
}
