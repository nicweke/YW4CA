<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blog = DB::table('blogs')->paginate(12);
        return view('blog.all', ['blog' => $blog]);
    }

    public function detail($id)
    {
        $blogDetail = Blog::where('id', $id)->first();
        return view('blog.detail', ['blogDetail' => $blogDetail]);
        
    }
}
