<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PagesController extends Controller
{
    public function index(){
        $late_posts=Post::orderBy('created_at','desc')->limit(2)->get();
        return view('pages.index')->with('late_posts', $late_posts);
    }

    public function getContact(){
        return view('contact');
}
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
}
