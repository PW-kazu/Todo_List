<?php

namespace App\Http\Request;

use Illuminate\Http\Request;
use App\Models\Todolist;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todolist::all();
        return view('index',['todos'=>$todos]);
    }

    public function create(TodoListRequest $request)
    {
        $form =$request->all();
        unset($form['_token']);
        todolist::create($form);
        return redirect('/');
    }

    public function update(TodoListRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todolist::find($request->id)->update($form);
        return redirect('/');

        
    }

    public function delete(Request $request)
    {
        Todolist::find($request->id)->delete();
        return redirect('/');
    }

    

}