<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // For Image insert & Edit we use Laravel Illuminate 
use App\Models\Category;
use App\Models\User;
use App\Models\Blog;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Response;
use DB;



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


        $image= $request->file('image');
        $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
        $post_image = 'images/WebsitePosts/'. Carbon::now()->format('Y/M/').'/';
        //Make Directory 
        File::makeDirectory($post_image, $mode=0777, true, true);        
        //save Image to the thumbnail path
        Image::make($image)->save(public_path($post_image.$IMGNAME));
        $blog_details->image = $IMGNAME;





        $thumbnail_image= $request->file('thumbnail_image');
        $thumbnail_IMGNAME = Str::random(10).'.'. $thumbnail_image->getClientOriginalExtension();       
        $preview_image = 'images/WebsitePosts/'. Carbon::now()->format('Y/M/').'/';
        //Make Directory 
        File::makeDirectory($preview_image, $mode=0777, true, true);        
        //save Image to the thumbnail path
        Image::make($thumbnail_image)->save(public_path($preview_image.$thumbnail_IMGNAME));
        $blog_details->thumbnail_image = $thumbnail_IMGNAME;


        $blog_details->save();
        return redirect()->route('Blogs.list')->with('success','New Blog created Successfully'); // redirect to banner create page with a success message.
    }

    public function edit($id)
    {
        //
        $blog_details = Blog::find($id);
        $categorylist = Category::all();
        if(!empty($blog_details)){
            return view('pages.CRUD_OPERATIONS.BlogPageCrudOperation.Blog_crud.edit',compact('blog_details','categorylist'));
        }
        else{
            return 'This id not found';
        }
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

        if($request->hasFile('image')){
            $image= $request->file('image');
            $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
            $post_image = 'images/WebsitePosts/'. Carbon::now()->format('Y/M/').'/';

            //Make Directory 
            File::makeDirectory($post_image, $mode=0777, true, true);        
            //save Image to the thumbnail path
            Image::make($image)->save(public_path($post_image.$IMGNAME));

            //Delete previous Image
            $old_img_location = public_path('images/WebsitePosts/'.$blog_details->created_at->format('Y/M/').'/'.$blog_details->image);
            if(file_exists($old_img_location)){
               unlink($old_img_location);
            }                
            //saving the new image
            $blog_details->image = $IMGNAME;
        }


        if($request->hasFile('thumbnail_image')){
            $thumbnail_image= $request->file('thumbnail_image');
            $thumbnail_IMGNAME = Str::random(10).'.'. $thumbnail_image->getClientOriginalExtension();       
            $thumbnail_image = 'images/WebsitePosts/'. Carbon::now()->format('Y/M/').'/';

            //Make Directory 
            File::makeDirectory($post_image, $mode=0777, true, true);        
            //save Image to the thumbnail path
            Image::make($thumbnail_image)->save(public_path($thumbnail_image.$thumbnail_IMGNAME));

            //Delete previous Image
            $old_img_location_thumbnail = public_path('images/WebsitePosts/'.$blog_details->created_at->format('Y/M/').'/'.$blog_details->thumbnail_image);
            if(file_exists($old_img_location_thumbnail)){
               unlink($old_img_location_thumbnail);
            }                
            //saving the new image
            $blog_details->thumbnail_image = $thumbnail_IMGNAME;
        }
        $blog_details->save();
        return redirect()->route('Blogs.list')->with('success','Blog details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $blog_details = Blog::find($id);
        $blog_details->delete();
        if(!empty($blog_details)){
            return redirect()->route('Blogs.list')->with('success','Blog Deleted Successfully');
        }
        else{
            return 'This id not found';
        }
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
        if(!empty($blog_details)){
            return view('pages.CRUD_OPERATIONS.BlogPageCrudOperation.Blog_crud.preview',compact('blog_details'));
        }
        else{
            return 'This id not found';
        }
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
        if(!empty($blog_details)){
            return redirect()->route('Blogs.restoreList')->with('success',"Blog Restored Successfully");
        }
        else{
            return 'This id not found';
        }
    }


    public function forceDelete($id)
    {
        //
        $blog_details = Blog::onlyTrashed()->find($id)->forceDelete();
        if(!empty($blog_details)){
            return redirect()->route('Blogs.restoreList')->with('success',"Blog Permanently Deleted Successfully");
        }
        else{
            return 'This id not found';
        }  
    } 
}
