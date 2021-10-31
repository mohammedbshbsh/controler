<?php

use Illuminate\Support\Facades\Route;

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
 

Route::get('/task' , function(){

    $tasks1 = [
        'Ferest name' => 'mohamed',
        'lest name' => 'bshbsh',
        'Age' => 26
       ];

       return view('task' , compact('tasks1'));
}); 

Route::get('/show/{id}' , function($id){

    $tasks1 = [
        'Ferest name' => 'mohamed',
        'lest name' => 'bshbsh',
        'Age' => 26
       ];
        
       $task = $tasks1[$id];
       return view('show' , compact('task'));
});