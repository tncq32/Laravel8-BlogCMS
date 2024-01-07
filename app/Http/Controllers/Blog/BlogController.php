<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Notifications\BlogNotification;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::all();
        return view('admin.blog.blogList',compact('blog'));
    }

    public function webindex()
    {
        $blog=Blog::all();
        return view('web.blog.blogList',compact('blog'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategory=BlogCategory::all();
        return view('admin.blog.blogNew',compact('blogCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = Blog::create($request->post());
        $user = Auth::user();

        $user->notify(new BlogNotification($blog));

        $blog->yazar_id = Auth::id();
        if ($request->hasFile('blog_front_image')) {
            $fileName = Str::slug($request->title) . '.' . $request->blog_front_image->extension();
            $fileNameWithUpload = 'images/blog/' . $blog->id . '/' . $fileName;

            $request->blog_front_image->move(public_path('images/blog/' . $blog->id . '/'), $fileName);
            $request->merge([
                'blog_front_image' => $fileNameWithUpload
            ]);
        }



        $blog->blog_front_image = $fileNameWithUpload;

        $blog->save();



        return redirect()->route('blog.list')->withSuccess('Blog Başarıyla Oluşturuldu');
    }
    public function webCreateComments(Request $request, $title, $id)
    {
        $comment = new Comment([
            'content' => $request->input('content'),
            // Diğer gerekli alanları ekleyin
        ]);

        // Yorumun oluşturulduğu belirli blogu alın
        $blog = Blog::find($id);
        $blogCategory = BlogCategory::all();
        $comments = Comment::where('blog_id', $id)->get();
        $blogs = Blog::all(); // $blogs değişkenini tanımla

        // Yorumun blog_id'sini ayarlayın
        $comment->blog_id = $blog->id;
        $comment->user_id = Auth::id();
        $comment->save();

        return view('web.blog.blogdetail', compact('blog', 'blogs', 'blogCategory','comments'));
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
    public function webShowBlog($title,$id)
    {

        $blog = Blog::find($id) ?? abort(404);
        $blogCategory = BlogCategory::all();
        $comments = Comment::where('blog_id', $id)->get();
        $blogs = Blog::all() ?? abort(404);

        return view('web.blog.blogdetail', compact('blog', 'blogs', 'blogCategory', 'comments'));
        return view('web.blog.blogList', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id) ?? abort(404);
        $blogCategory = BlogCategory::all();



        return view('admin.blog.blogEdit', compact('blog', 'blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, Blog $products)
    {
        $blog = Blog::find($id) ?? abort(404);
        Blog::find($id)->update($request->except(['_method', '_token']));

        return redirect()->route('blog.list')->withSuccess('Blog  güncelleme işlemi başarıyla gerçekleşti');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $products, $id)
    {
        $blog = Blog::find($id) ?? abort(404);
        $blog->delete();
        return redirect()->route('blog.list')->withSuccess('Blog silme işlemi başarıyla gerçekleşti');
    }
}
