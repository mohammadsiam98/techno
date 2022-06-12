<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceOverview;
use App\Models\SectorServices;
use App\Models\SectorServicesNames;
use App\Models\SectorSpecialFeaturesDynamicList; 
use App\Models\SectorSpecialFeatureSection; 
use App\Models\SectorTechnologiesName;
use App\Models\StackTech;
use App\Models\Category;
use DB;
class SectosController extends Controller
{
    public function sectors($id)
    {
        $categoryName = $id;
        $category = Category::where('categoryName',$categoryName)->first();
        $categoryId = $category->id;

        $serviceOverview = ServiceOverview::where('category_id',$categoryId)->first();
        //dd($serviceOverview);
        $SectorServices  = SectorServices::where('category_id',$categoryId)->get();
        // dd($SectorServices);
        $SectorSF  = SectorSpecialFeatureSection::where('category_id',$categoryId)->first();
        // dd($SectorSF);
        $SectorSF_list = DB::table('sector_special_features_dynamic_lists')->join('sector_special_feature_sections','sector_special_feature_sections.id','sector_special_features_dynamic_lists.sector_Special_feature_id')->where('category_id',$categoryId)->get(); 
        // dd($SectorSF_list);
        $SectorServicesName=DB::table('sector_services_names')->join('sector_services','sector_services_names.id','sector_services.Sector_service_name_id')->where('category_id',$categoryId)->first(); 
        // dd($SectorServicesName);
        $SectorStackName = SectorTechnologiesName::where('category_id',$categoryId)->first();
        // dd($SectorStackName);
        $SectorStack_list =DB::table('stack_teches')->join('sector_technologies_names','sector_technologies_names.category_id','stack_teches.stack_id')->where('category_id',$categoryId)->get(); 
        // dd($SectorStack_list);
        return view('pages.DynamicServices.services',compact('serviceOverview','categoryId','SectorServices','SectorServices','SectorSF','SectorSF_list','SectorServicesName','SectorStackName','SectorStack_list'));
    }
}
