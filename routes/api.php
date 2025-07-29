<?php

use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('blogs', BlogController::class);

// | HTTP Method | URI | Controller Method | Purpose | 
// | GET | /api/blogs | index | List all blogs | 
// | POST | /api/blogs | store | Create a new blog | 
// | GET | /api/blogs/{id} | show | Get a specific blog | 
// | PUT/PATCH | /api/blogs/{id} | update | Update a blog | 
// | DELETE | /api/blogs/{id} | destroy | Delete a blog | 