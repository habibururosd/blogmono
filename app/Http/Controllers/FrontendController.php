<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data['posts'] = post::all();
        return view('backend.dashboard',$data);
    }

    public function blogDetails($slug)
    {
        $data['categories'] = Category::all();
        $data['post'] = post::where('slug',$slug)->first();
        return view('frontend.blog.details',$data);
    }
}
