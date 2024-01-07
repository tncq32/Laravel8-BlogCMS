<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Categories;
use App\Models\Comment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestBlogs = Blog::latest()->take(5)->get();
        $latestCategories = BlogCategory::latest()->take(5)->get();
        $latestComments = Comment::latest()->take(5)->get();
        $blogs = Blog::all();

        // Son eklenen 5 blogun tarih bilgisini güncelle
        foreach ($latestBlogs as $blog) {
            $blog->formattedDate = $blog->created_at->diffForHumans();
        }
        foreach ($latestBlogs as $blog) {
            $blog->totalComments = $blog->comments()->count();
        }
        // Son yapılan 5 yorumun tarih bilgisini güncelle
        foreach ($latestComments as $comment) {
            $comment->formattedDate = $comment->created_at->diffForHumans();
        }

        return view('pages.index', compact('latestBlogs', 'latestCategories', 'latestComments', 'blogs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
