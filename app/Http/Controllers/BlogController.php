<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs',[
        'blogs'=>$this->getBlogs(),
        'categories'=>Category::all()
        ]);
    }
    public function show(Blog $blog)
    {
        return view('blog',[
            'blog'=>$blog
        ]);
    }
    protected function getBlogs()
    {
        $blogs=Blog::latest();
        if(request('search')){
        $blogs=$blogs->where('title','LIKE','%'.request('search').'%')
                    ->orWhere('body','LIKE','%'.request('search').'%');
        }
        return $blogs->get();
    }
}
