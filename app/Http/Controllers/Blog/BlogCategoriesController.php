<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class BlogCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategory = BlogCategory::all();
        return view('admin.blog.blogCategories',compact('blogCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategory = BlogCategory::all();
        return view('admin.blog.blogCategoriesNew',compact('blogCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogCategory = BlogCategory::create($request->post());

        if ($request->hasFile('front_image')) {
            $fileName = Str::slug($request->title) . '.' . $request->front_image->extension();
            $fileNameWithUpload = 'images/blogCategories/' . $blogCategory->id . '/' . $fileName;

            $request->front_image->move(public_path('images/blogCategories/'.$blogCategory->id.'/'), $fileName);
            $request->merge([
                'front_image' => $fileNameWithUpload
            ]);
        }

        $blogCategory->front_image = $fileNameWithUpload;
        $blogCategory->save();

        return redirect()->route('blogCategories.list')->withSuccess('blogCategory Category Başarıyla Oluşturuldu');
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
        $blogCategories = BlogCategory::find($id) ?? abort(404);




        return view('admin.blog.blogCategoriesEdit', compact('blogCategories'));
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
        $blogCategories = BlogCategory::find($id) ?? abort(404);
        BlogCategory::find($id)->update($request->except(['_method','_token']));

        return redirect()->route('blogCategories.list')->withSuccess('Product Category güncelleme işlemi başarıyla gerçekleşti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogCategory = BlogCategory::find($id) ?? abort(404);
        $blogCategory->delete();
        return redirect()->route('blogCategories.list')->withSuccess('blogCategories silme işlemi başarıyla gerçekleşti');
    }
}
