<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TodoList;
use Illuminate\Support\Str;

class TodoListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Todolist::class;
    
    public function definition()
    {
        return [
            'content' => Str::random(10),
        ];
    }
}
