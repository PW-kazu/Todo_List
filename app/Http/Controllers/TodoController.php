<?php

namespace App\Http\Controllers;

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

    public function create(TodoRequest $request)
    {
        $form =$request->all();
        unset($form['_token']);
        todolist::create($form);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todolist::find($request->id)->update($form);
        return redirect('/');

        
    }

    public function delete(TodoRequest $request)
    {
        Todolist::find($request->id)->delete();
        return redirect('/');
    }

    

}