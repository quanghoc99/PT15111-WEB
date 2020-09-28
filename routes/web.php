<?php

use Illuminate\Support\Facades\Route;
use DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    // Su dung query builder
    // Lay ra mang students
    $students = DB::table('students')->where('id', '<', 5)->get();
    // Lay rieng 1 student
    // $student = DB::table('students')->find(1);
    $student = DB::table('students')->where('id', '=', 1)->first();


    // truyen vao [ten bien view nhan duoc => gia tri];
    return view('students.detail', ['studentValue' => $student]);
});

// Gia tri truyen vao url se tuong ung vi tri tham so cua function
Route::get('/students/{id}/{age}', function ($id, $age) {
    dd('Gia tri truyen vao tren url: ' . $id . ' ' . $age);
});

Route::get('/students/detail', function () {
    return view('students.detail');
});
// Cach 2:
Route::view('/students/detail-2', 'students.detail');
