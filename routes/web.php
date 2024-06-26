<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。
use App\Http\Controllers\CategoryController;

Route::get('/', [PostController::class,'index'] );
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}', [PostController::class ,'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::post('/posts',[PostController::class,'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class,'delete']);

Route::get('/categories/{category}', [CategoryController::class,'index']);
