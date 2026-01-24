<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (Request $request) {
    return response()->json([
        'name' => 'Elena May Olaivar',
        'section' => 'BSCS 601',
        'fave song' => 'back to remember111'
    ]);
});
