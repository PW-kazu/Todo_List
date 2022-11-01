<?php

namespace App\Http\Request;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\ToDoRequest;

class ToDoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return view('index',['todos'=>$todos]);
    }

    public function create(TodoListRequest $request)
    {
        $form =$request->all();
        unset($form['_token']);
        todolist::create($form);
        return redirect('/');
    }





    









}