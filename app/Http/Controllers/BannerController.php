<?php

namespace App\Http\Controllers;
use Toastr;
use Illuminate\Http\Request;
use App\Models\Banner; // Banner Model Import 
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Response;
use DB;
class BannerController extends Controller
{ 
    public function list()
    {
        // Fetch Banner List
        $banner = Banner::all();
        return view ('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.list',compact('banner'));
    }

    public function create()
    {
        // Redirect to Banner Create View Page
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.create');
    }

    public function store(Request $request)
    {
        // Validation when a banner store in database
        $this->validate($request,[
            'heading' => 'required|min:3|max:100|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15630',

        ],[
            'heading.required' => 'Please write your slider heading', // admin have to write banner title.
            'heading.min' => 'Slider heading should be at least minimum 3 characters', // title should be at least minimum 3 characters.
            'heading.max' => 'Slider heading should be maximum 100 characters', // title should not be maximum 100 character

            'image.required' => 'Please upload your image', // Image is required in banner.
        ]);
        $banner = new Banner;
        $banner->heading = $request->heading;

        $image= $request->file('image');
        $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
        $banner_image = 'images/blog/'. Carbon::now()->format('Y/M/').'/';
        //Make Directory 
        File::makeDirectory($banner_image, $mode=0777, true, true);        
        //save Image to the thumbnail path
        Image::make($image)->save(public_path($banner_image.$IMGNAME));
        $banner->image = $IMGNAME;
        Toastr::success('Banner Successfully Added', 'Success', ["positionClass" => "toast-bottom-right",
        "closeButton"=> "true",
        "debug" => "false",
        "newestOnTop"=> "false",
        "progressBar"=> "true",
        "preventDuplicates"=> "false",
        "showDuration"=> "300",
        "hideDuration"=> "1000",
        "timeOut"=>"5000",
        "extendedTimeOut"=> "1000",
        "showEasing"=> "swing",
        "hideEasing"=> "linear",
        "showMethod"=> "fadeIn",
        "hideMethod"=> "fadeOut",
        "preventDuplicates"=> "true",
      
    ]);
        $banner->save();
        return redirect()->route('Banner.list');

    }

    public function edit($id)
    {
        $banner = Banner::find($id); // Fetch specific banner id
        if(!empty($banner)){
            return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.edit',compact('banner'));
        }
        else{
            return 'Invalid id';
        }
        
    }

    public function update ( Request $request, $id)
    {
        // Fetch Specific single banner
        $banner = Banner::find($id);
        if (!empty($banner)){

            $banner->heading = $request->heading;
            if($request->hasFile('image')){
                $image= $request->file('image');
                $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
                $banner_image = 'images/blog/'. Carbon::now()->format('Y/M/').'/';
    
                //Make Directory 
                File::makeDirectory($banner_image, $mode=0777, true, true);        
                //save Image to the thumbnail path
                Image::make($image)->save(public_path($banner_image.$IMGNAME));
    
                //Delete previous Image
                $old_img_location = public_path('images/blog/'.$banner->created_at->format('Y/M/').'/'.$banner->image);
                if(file_exists($old_img_location)){
                   unlink($old_img_location);
                }                
                //saving the new image
                $banner->image = $IMGNAME;
            }
            Toastr::success('Banner Successfully Updated', 'Success', ["positionClass" => "toast-bottom-right",
            "closeButton"=> "true",
            "debug" => "false",
            "newestOnTop"=> "false",
            "progressBar"=> "true",
            "preventDuplicates"=> "false",
            "showDuration"=> "300",
            "hideDuration"=> "1000",
            "timeOut"=>"5000",
            "extendedTimeOut"=> "1000",
            "showEasing"=> "swing",
            "hideEasing"=> "linear",
            "showMethod"=> "fadeIn",
            "hideMethod"=> "fadeOut",
            "preventDuplicates"=> "true",
        ]);
            $banner->save();
            return redirect()->route('Banner.list');
        }
        else
        {
          return 'invalid id';
        }
    }

    public function destroy($id)
    {
        $banner = Banner::find($id)->delete();
        Toastr::error('Post Successfully Deleted', 'Success', ["positionClass" => "toast-bottom-right",
            "closeButton"=> "true",
            "debug" => "false",
            "newestOnTop"=> "false",
            "progressBar"=> "true",
            "preventDuplicates"=> "false",
            "showDuration"=> "300",
            "hideDuration"=> "1000",
            "timeOut"=>"5000",
            "extendedTimeOut"=> "1000",
            "showEasing"=> "swing",
            "hideEasing"=> "linear",
            "showMethod"=> "fadeIn",
            "hideMethod"=> "fadeOut",
            "preventDuplicates"=> "true",
        ]);
        return redirect()->route('Banner.list');
    }

    public function updateStatus(Request $request)
    {
        $banner = Banner::find($request->banner_id);
        $banner->status = $request->status;
        $banner->save(); 
        return redirect()->route('Banner.list')->with('success',"Banner Activated Successfully");
    }


    public function preview($id)
    {
        $banner = Banner::find($id);
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.preview',compact('banner'));
    }


    public function restoreList()
    {
        $banner = Banner::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.restoreList',compact('banner'));
    }


    public function restoreData($id)
    {
        $banner = Banner::onlyTrashed()->find($id)->restore();
        return redirect()->route('Banner.restoreList')->with('success',"Banner Restored Successfully");
    }


    public function forceDelete($id)
    {
        $banner = Banner::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('Banner.restoreList')->with('success',"Banner Permanently Deleted Successfully");
    }
}
