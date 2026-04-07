<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// ADD THIS LINE BELOW:
use App\Models\Task; 

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Now you can use it like this:
        Task::create([
            'title' => 'Build my first IoT dashboard',
        ]);
        
        // OR if you don't want to add the 'use' line above, 
        // you must use the full path:
        // \App\Models\Task::create(['title' => 'Test task']);
    }
}