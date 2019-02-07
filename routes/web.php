<?php

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
    //sending data to views
    
    $tasks = [
        'go to the store',
        'go to the market',
        'go to the work'
    ];
    // to pass data into view as a second parameter
    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'foobar',
        'moo' => request('title')
    ]);

    //~second way
    // return view('welcome')->withTasks($tasks)->withFoo(foo);

    // third way
    return view('welcome')->with([
        'foo' => 'bar',
        'tasks' => ['some task']

    ])
});

Route::get('/products', function() {
    return view('products');
});

Route::get('/services', function() {
    return view('services');
});

Route::get('/about', function() {
    return view('products');
});

Route::get('/contact', function() {
    return view('contact');
});
