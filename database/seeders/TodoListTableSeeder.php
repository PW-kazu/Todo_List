<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        todolist::factory()->create();
    }
}