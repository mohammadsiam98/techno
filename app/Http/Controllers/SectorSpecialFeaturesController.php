<?php

namespace App\Http\Controllers;
use Toastr;
use Illuminate\Http\Request;
use App\Models\SectorSpecialFeatureSection;
use App\Models\Category;

class SectorSpecialFeaturesController extends Controller
{
    public function list()
    {
        //
        $SectorSF = SectorSpecialFeatureSection::all();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeatures_crud.list',compact('SectorSF'));
    }

    public function create()
    {
        //
        $categorylist = Category::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeatures_crud.create',compact('categorylist'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'heading' => 'required|min:3|string',
            'details' => 'required|min:3|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15630',
        ],[
            'heading.required' => 'Please write your heading', 
            'heading.required' => 'Please write your details', 
            'heading.required' => 'Please insert your image', 
        ]);
        $if_a_SectorSF_already_written = DB::table('sector_special_feature_sections')->where('category_id',$request->category_id)->first();
        if (empty($if_a_SectorSF_already_written))
        {
            $SectorSF = new SectorSpecialFeatureSection;
            $SectorSF->category_id=$request->category_id;
            $SectorSF->heading=$request->heading;
            $SectorSF->details = $request->details;
            if ($image = $request->file('image'))
            {
                $destinationPath = 'images/Sector_SF_Section/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $SectorSF['image'] = "$profileImage";
            }
            Toastr::success('Sector Special Features Created Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
            $SectorSF->save();
            return redirect()->route('SectorSF.list')->with('success','Created Successfully');
        }
        else
        {
            return 'In this category there is already data inserted.';
        }
    }

    public function edit($id)
    {
        //
        $SectorSF = SectorSpecialFeatureSection::find($id); 
        $categorylist = Category::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeatures_crud.edit',compact('SectorSF','categorylist'));
    }

    public function update(Request $request, $id)
    {
        $SectorSF = SectorSpecialFeatureSection::find($id);
        $SectorSF->category_id=$request->category_id;
        $SectorSF->heading=$request->heading;
        $SectorSF->details = $request->details;
        if ($image = $request->file('image'))
        {
            $destinationPath = 'images/Sector_SF_Section/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $SectorSF['image'] = "$profileImage";
        }
        Toastr::success('Sector Special Features Updated Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $SectorSF->save();
        return redirect()->route('SectorSF.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $SectorSF = SectorSpecialFeatureSection::find($id);
        Toastr::success('Sector Special Feature Deleted Successfully', 'Success', ["positionClass" => "toast-bottom-right",
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
        $SectorSF->delete();
        return redirect()->route('SectorSF.list')->with('success','Deleted Successfully');
    }

    public function preview($id)
    {
        $SectorSF = SectorSpecialFeatureSection::find($id);
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeatures_crud.preview',compact('SectorSF'));
    }

}
