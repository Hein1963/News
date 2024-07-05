<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\BlogController;

Route::get('/',[BlogController::class,'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class,'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('blogs',[
        'blogs'=>$category->blogs->load('author','category'),
        'categories'=>Category::all()
    ]);
});
Route::get('/users/{user:username}',function (User $user){
    return view('blogs',[
        'blogs'=>$user->blogs->load('author','category'),
        'categories'=>Category::all()
    ]);
});