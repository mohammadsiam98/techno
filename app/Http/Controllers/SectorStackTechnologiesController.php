<?php

namespace App\Http\Controllers;
use Toastr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\SectorTechnologiesName;
use App\Models\StackTech;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Response;
use DB;



class SectorStackTechnologiesController extends Controller
{
    public function list()
    {
        //
        $stackDetails = StackTech::all();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.list',compact('stackDetails')); 
    }

    public function create()
    {
        //
        $stackList = SectorTechnologiesName::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.create',compact('stackList'));
    }

    public function store(Request $request)
    {
        //
        $stackDetails = new StackTech;
        $stackDetails->stack_id =$request-> stack_id;
        
        $stackDetails->stackName = $request->stackName;      
        $stackDetails->details= $request->details;

        $image= $request->file('image');
        $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
        $SD_image = 'images/SectorTechnologyImages/'. Carbon::now()->format('Y/M/').'/';
        //Make Directory 
        File::makeDirectory($SD_image, $mode=0777, true, true);        
        //save Image to the thumbnail path
        Image::make($image)->save(public_path($SD_image.$IMGNAME));
        $stackDetails->image = $IMGNAME;
        Toastr::error('Stack Details Created Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $stackDetails->save();
        return redirect()->route('sector_technologies_details.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $stackDetails = StackTech::find($id); 
        $stackList = SectorTechnologiesName::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.edit',compact('stackDetails','stackList'));
    }

    public function update(Request $request, $id)
    {
        //
        $stackDetails = StackTech::find($id);
        $stackDetails->stack_id =$request->stack_id;
        $stackDetails->stackName = $request->stackName;      
        $stackDetails->details= $request->details;

        if($request->hasFile('image')){
            $image= $request->file('image');
            $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
            $SD_image = 'images/SectorTechnologyImages/'. Carbon::now()->format('Y/M/').'/';

            //Make Directory 
            File::makeDirectory($SD_image, $mode=0777, true, true);        
            //save Image to the thumbnail path
            Image::make($image)->save(public_path($SD_image.$IMGNAME));

            //Delete previous Image
            $old_img_location = public_path('images/SectorTechnologyImages/'.$stackDetails->created_at->format('Y/M/').'/'.$stackDetails->image);
            if(file_exists($old_img_location)){
               unlink($old_img_location);
            }                
            //saving the new image
            $stackDetails->image = $IMGNAME;
        }

        Toastr::error('Stack Details Updated Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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

        $stackDetails->save();
        return redirect()->route('sector_technologies_details.list')->with('success',"Deleted Successfully");
    }

    public function destroy($id)
    {
        //
        $stackDetails = StackTech::find($id);
        Toastr::error('Stack Details Deleted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $stackDetails->delete();
        return redirect()->route('sector_technologies_details.list')->with('success',"Deleted Successfully");
    }

    public function sector_technologies_detailsStatus(Request $request)
    {
        $stackDetails = StackTech::find($request->stackDetails_id);
        $stackDetails->status = $request->status;
        $stackDetails->save(); 
        return redirect()->route('sector_technologies_details.list')->with('success',"Activated Successfully");
    }


    public function preview($id)
    {
        //
        $stackDetails = StackTech::find($id);
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.preview',compact('stackDetails'));
    }


    public function restoreList()
    {
        //
        $stackDetails = StackTech::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.restoreList',compact('stackDetails'));
    }


    public function restoreData($id)
    {
        //
        $stackDetails = StackTech::onlyTrashed()->find($id)->restore();
        return redirect()->route('sector_technologies_details.restoreList')->with('success',"Restored Successfully");
    }


    public function forceDelete($id)
    {
        //
        $stackDetails = StackTech::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('sector_technologies_details.restoreList')->with('success',"Permanently Deleted Successfully");
    }
}
