<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectorSpecialFeatureSection;
use App\Models\SectorSpecialFeaturesDynamicList;
class SectorSpecialFeaturesDynamicController extends Controller
{
    public function list()
    {
        //
        $SectorSFD = SectorSpecialFeaturesDynamicList::all();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeaturesDynamic_crud.list',compact('SectorSFD')); 
    }

    public function create()
    {
        //
        $Fectch_Sector_SF = SectorSpecialFeatureSection::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeaturesDynamic_crud.create',compact('Fectch_Sector_SF'));
    }

    public function store(Request $request)
    {
        //
        $SectorSFD = new SectorSpecialFeaturesDynamicList;
        $SectorSFD->sector_Special_feature_id =$request->sector_Special_feature_id;
        $SectorSFD->featureName = $request->featureName;      
        $SectorSFD->save();
        return redirect()->route('SectorSFD.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $SectorSFD = SectorSpecialFeaturesDynamicList::find($id); 
        $Fectch_Sector_SF = SectorSpecialFeatureSection::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeaturesDynamic_crud.edit',compact('SectorSFD','Fectch_Sector_SF'));
    }

    public function update(Request $request, $id)
    {
        //
        $SectorSFD = SectorSpecialFeaturesDynamicList::find($id);
        $SectorSFD->sector_Special_feature_id =$request->sector_Special_feature_id;
        $SectorSFD->featureName = $request->featureName;      
        $SectorSFD->save();
        return redirect()->route('SectorSFD.list')->with('success',"Deleted Successfully");
    }

    public function destroy($id)
    {
        //
        $SectorSFD = SectorSpecialFeaturesDynamicList::find($id);
        $SectorSFD->delete();
        return redirect()->route('SectorSFD.list')->with('success',"Deleted Successfully");
    }

    public function sector_special_features_dynamic_Status(Request $request)
    {
        $SectorSFD = SectorSpecialFeaturesDynamicList::find($request->sector_Special_feature_id);
        $SectorSFD->status = $request->status;
        $SectorSFD->save(); 
        return redirect()->route('SectorSFD.list')->with('success',"Activated Successfully");
    }


    public function preview($id)
    {
        //
        $SectorSFD = SectorSpecialFeaturesDynamicList::find($id);
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeaturesDynamic_crud.preview',compact('SectorSFD'));
    }


    public function restoreList()
    {
        //
        $SectorSFD = SectorSpecialFeaturesDynamicList::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.sectorSpecialFeaturesDynamic_crud.restoreList',compact('SectorSFD'));
    }


    public function restoreData($id)
    {
        //
        $SectorSFD = SectorSpecialFeaturesDynamicList::onlyTrashed()->find($id)->restore();
        return redirect()->route('SectorSFD.restoreList')->with('success',"Restored Successfully");
    }


    public function forceDelete($id)
    {
        //
        $SectorSFD = SectorSpecialFeaturesDynamicList::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('SectorSFD.restoreList')->with('success',"Permanently Deleted Successfully");
    }
}
