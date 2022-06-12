<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // For Image insert & Edit we use Laravel Illuminate 
use App\Models\Category;
use App\Models\User;
use App\Models\Blog;
class BlogController extends Controller
{
    public function list()
    {
        //
        $blog_details = Blog::all();
        return view ('pages.CRUD_OPERATIONS.BlogPageCrudOperation.Blog_crud.list',compact('blog_details'));
    }

    public function create()
    {
        //
        $categorylist = Category::all();
        return view('pages.CRUD_OPERATIONS.BlogPageCrudOperation.Blog_crud.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:15630',
            'thumbnail_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:15630',

        ],[
            'category_id.required' => 'Please select a category', 
            'title.required' => 'Please write a blog title', 
            'description.required' => 'Please write your blog description',
            'image.required' => 'Please upload your image', // Image is required in banner.
        ]);
        $user_id = Auth::id();
        $blog_details = new Blog;
        $blog_details->category_id = $request->category_id;
        $blog_details->user_id = $user_id;
        $blog_details->title = $request->title;
        $blog_details->slug = Str::slug($request->title);
        $blog_details->description = $request->description;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $blog_details->image ="storage/img/".$image->hashName(); // if same image is again upload then it will be renamed that's why we use hashname when we try to save an image.

        $thumbnail_image  = $request->file('thumbnail_image');
        Storage::putFile('public/img/',$thumbnail_image);
        $blog_details->thumbnail_image ="storage/img/".$thumbnail_image->hashName(); // if same image is again upload then it will be renamed that's why we use hashname when we try to save an image.
        $blog_details->save();
        return redirect()->route('Blogs.list')->with('success','New Blog created Successfully'); // redirect to banner create page with a success message.
    }

    public function edit($id)
    {
        //
        $blog_details = Blog::find($id);
        $categorylist = Category::all();
        return view('pages.CRUD_OPERATIONS.BlogPageCrudOperation.Blog_crud.edit',compact('blog_details','categorylist'));
    }

    public function update(Request $request, $id)
    {
        // Fetch Specific single banner
        $user_id = Auth::id();
        $blog_details = Blog::find($id);
        $blog_details->category_id = $request->category_id;
        $blog_details->user_id = $user_id;
        $blog_details->title = $request->title;
        $blog_details->description = $request->description;
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $blog_details->image ="storage/img/".$image->hashName();
        }
        if($request->file('thumbnail_image')){
            $thumbnail_image  = $request->file('thumbnail_image');
            Storage::putFile('public/img/',$thumbnail_image);
            $blog_details->thumbnail_image ="storage/img/".$thumbnail_image->hashName();
        }
        $blog_details->save();
        return redirect()->route('Blogs.list')->with('success','Blog details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $blog_details = Blog::find($id);
        $blog_details->delete();
        return redirect()->route('Blogs.list')->with('success','Blog Deleted Successfully');
    }

    public function updateStatus(Request $request)
    {
        $blog_details = Blog::find($request->blog_id);
        $blog_details->status = $request->status;
        $blog_details->save(); 
        return redirect()->route('Blogs.list')->with('success',"Blog Activated Successfully");
    }


    public function preview($id)
    {
        //
        $blog_details = Blog::find($id);
        return view('pages.CRUD_OPERATIONS.BlogPageCrudOperation.Blog_crud.preview',compact('blog_details'));
    }


    public function restoreList()
    {
        //
        $blog_details = Blog::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.BlogPageCrudOperation.Blog_crud.restoreList',compact('blog_details'));
    }


    public function restoreData($id)
    {
        //
        $blog_details = Blog::onlyTrashed()->find($id)->restore();
        return redirect()->route('Blogs.restoreList')->with('success',"Blog Restored Successfully");
    }


    public function forceDelete($id)
    {
        //
        $blog_details = Blog::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('Blogs.restoreList')->with('success',"Blog Permanently Deleted Successfully");
    } 
}
