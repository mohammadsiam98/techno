<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SectorServices;
use App\Models\SectorServicesNames;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Response;
use DB;



class SectorServicesController extends Controller
{
    public function list()
    {
        //
        $SectorServices = SectorServices::all();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorServices_crud.list',compact('SectorServices'));
    }

    public function create()
    {
        //
        $categorylist = Category::all();
        $Sector_service_name_heading_list = SectorServicesNames::all(); //Fetch All sector heading name
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorServices_crud.create',compact('categorylist','Sector_service_name_heading_list'));
    }

    public function store(Request $request)
    {
        
        $SectorServices = new SectorServices;
        $SectorServices->title = $request->title;
        $SectorServices->details = $request->details;
        $SectorServices->category_id=$request->category_id;
        $SectorServices->Sector_service_name_id=$request->Sector_service_name_id;
     

        $image= $request->file('image');
        $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
        $SS_image = 'images/SectorServices/'. Carbon::now()->format('Y/M/').'/';
        //Make Directory 
        File::makeDirectory($SS_image, $mode=0777, true, true);        
        //save Image to the thumbnail path
        Image::make($image)->save(public_path($SS_image.$IMGNAME));
        $SectorServices->image = $IMGNAME;
        // dd($SectorServices);
        $SectorServices->save();
        return redirect()->route('SectorServices.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorServices = SectorServices::find($id); //Fetch Single Service to edit
        $categorylist = Category::all(); //Fetch All Category
        $Sector_service_name_heading_list = SectorServicesNames::all(); //Fetch All sector heading name
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorServices_crud.edit',compact('SectorServices','categorylist','Sector_service_name_heading_list'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorServices = SectorServices::find($id);
        $SectorServices->title = $request->title;
        $SectorServices->details = $request->details;
        $SectorServices->category_id=$request->category_id;
        $SectorServices->Sector_service_name_id=$request->Sector_service_name_id;

        if($request->hasFile('image')){
            $image= $request->file('image');
            $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
            $SS_image = 'images/SectorServices/'. Carbon::now()->format('Y/M/').'/';

            //Make Directory 
            File::makeDirectory($SS_image, $mode=0777, true, true);        
            //save Image to the thumbnail path
            Image::make($image)->save(public_path($SS_image.$IMGNAME));

            //Delete previous Image
            $old_img_location = public_path('images/SectorServices/'.$SectorServices->created_at->format('Y/M/').'/'.$SectorServices->image);
            if(file_exists($old_img_location)){
               unlink($old_img_location);
            }                
            //saving the new image
            $SectorServices->image = $IMGNAME;
        }
        // dd($SectorServices);

        $SectorServices->save();
        return redirect()->route('SectorServices.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorServices = SectorServices::find($id);
        $SectorServices->delete();
        return redirect()->route('SectorServices.list')->with('success',"Deleted Successfully");
    }


    public function SectorServicesStatus(Request $request)
    {
        $SectorServices = SectorServices::find($request->sector_services_id);
        $SectorServices->status = $request->status;
        $SectorServices->save(); 
        return redirect()->route('SectorServices.list');
    }

    public function preview($id)
    {
        //
        $SectorServices = SectorServices::find($id);
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorServices_crud.preview',compact('SectorServices'));
    }

    public function restoreList()
    {
        //
        $SectorServices = SectorServices::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorServices_crud.restoreList',compact('SectorServices'));
    }

    public function restoreData($id)
    {
        //
        $SectorServices = SectorServices::onlyTrashed()->find($id)->restore();
        return redirect()->route('SectorServices.list')->with('success',"Restored Successfully");
    }

    public function forceDelete($id)
    {
        //
        $SectorServices = SectorServices::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('SectorServices.restoreList')->with('success',"Permanently Deleted Successfully");
    }

}
