<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Response;
use DB;
use Illuminate\Http\Request;
use App\Models\brands;
class BrandsCollabWithController extends Controller
{
    public function list()
    {
        //
        $brands = brands::all();
        return view ('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.brands_crud.list',compact('brands'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.brands_crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15630',

        ],[
            'image.required' => 'Please upload your image', // Image is required in banner.
        ]);
        $brands = new brands;
        $image= $request->file('image');
        $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
        $brands_image = 'images/brandsCollabWith/'. Carbon::now()->format('Y/M/').'/';
        //Make Directory 
        File::makeDirectory($brands_image, $mode=0777, true, true);        
        //save Image to the thumbnail path
        Image::make($image)->save(public_path($brands_image.$IMGNAME));
        $brands->image = $IMGNAME;
        $brands->save();
        return redirect()->route('brands.list')->with('success','Brand Image Inserted Successfully'); // redirect to banner create page with a success message.

    }

    public function edit($id)
    {
        //
        $brands = brands::find($id); // Fetch specific banner id
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.brands_crud.edit',compact('brands'));
    }

    public function update(Request $request, $id)
    {
        // Fetch Specific single banner
        $brands = brands::find($id);
        if($request->hasFile('image')){
            $image= $request->file('image');
            $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
            $brands_image = 'images/brandsCollabWith/'. Carbon::now()->format('Y/M/').'/';

            //Make Directory 
            File::makeDirectory($brands_image, $mode=0777, true, true);        
            //save Image to the thumbnail path
            Image::make($image)->save(public_path($brands_image.$IMGNAME));

            //Delete previous Image
            $old_img_location = public_path('images/blog/'.$brands->created_at->format('Y/M/').'/'.$brands->image);
            if(file_exists($old_img_location)){
               unlink($old_img_location);
            }                
            //saving the new image
            $brands->image = $IMGNAME;
        }
        $brands->save();
        return redirect()->route('brands.list')->with('success','Image updated Successfully');
    }

    public function destroy($id)
    {
        //
        $brands = brands::find($id);
        $brands->delete();
        return redirect()->route('brands.list')->with('success','Banner Deleted Successfully');
    }
}
