<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TodoList;
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
