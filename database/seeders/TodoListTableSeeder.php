<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ToDoList;
use Illuminate\Support\Facades\DB;

class TodoListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todolist::factory()->create();
    }
}
