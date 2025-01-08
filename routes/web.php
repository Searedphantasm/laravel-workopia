<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return "<h1>Available Jobs</h1>";
})->name('jobs');

Route::match(['get','post'],'/jobs', function () {
    return "<h1>Submitted</h1>";
});

Route::get("/test", function (Request $request) {

    return [
        'method' => $request->method(),
        'path' => $request->path(),
        'url' => $request->url(),
        'query' => $request->all(),
    ];
});

// returning JSON
Route::get("/api/users", function () {
   return [
       'name' => 'John Doe',
       'email' => 'john@doe.com',
   ];
});

Route::get("/users/{id}", function (string $id) {
   return "<h1>{$id}</h1>";
})->whereNumber('id');

Route::get("/users/{name?}", function ($name = null) {
   return "<h1>{$name}</h1>";
})->whereAlpha('name');
