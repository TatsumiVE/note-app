<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data=Blog::all();
        return view('newblog.index',compact('data'));
    }

    public function create(){
        return view('newblog.create');
    }
    public function store(Request $request){

        Blog::create($request->all());
        return redirect()->route('newblog.index');
    }
}
