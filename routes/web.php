<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/students-list', function () {
    // Fetch data using Laravel's Query Builder
    $users = DB::table('users')->get();
    
    return view('students', ['users' => $users]);
});